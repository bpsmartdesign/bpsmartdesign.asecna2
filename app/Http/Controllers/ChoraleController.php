<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

use App\Models\Chorale;
use App\Models\User;
use App\Models\Evenement;
use App\Models\Actualite;

class ChoraleController extends Controller
{

  public function index()
  {
    $page_title = 'Chorale';
    $user = Auth::user();
    $abb = '';
    $datas = Chorale::all();
    $nbr_actualite = count(Actualite::where('status', '!=', 'draft')->get());
    $nbr_user = count(User::where('status', 'active')->get());
    $nbr_event = count(Evenement::where('status', '!=', 'draft')->get());

    foreach (explode(' ', $user->name) as $name) {
      $abb .= $name[0];
    }

    return view('pages.chorale', compact('page_title', 'user', 'user', 'abb', 'datas', 'nbr_actualite', 'nbr_user', 'nbr_event'));
  }

  public function store(Request $request)
  {

    $input = $request->except('_token');
    $input['created_by_user_id'] = $request->user()->getAuthIdentifier();
    
    DB::beginTransaction();
    try {
      $chorale = Chorale::find(1);

      if (!is_null($chorale) && $chorale->update(request()->except('_token'))) {
        return redirect()->back()->with('success', 'Mise à jour des informations effectuée !');
      } else {
        $data = new Chorale($input);
        $data->save();
      }
      DB::commit();
      return redirect()->back()->with('success', 'Ajout des information effectuée');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }
}
