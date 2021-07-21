<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

use App\Models\Title;

class TitleController extends Controller
{

  public function index()
  {
    $page_title = 'Rôles';
    $user = Auth::user();
    $abb = '';
    $datas = Title::all();
    $old = isset($_GET['id']) ? Title::find($_GET['id']) : null;

    foreach (explode(' ', $user->name) as $name) {
      $abb .= $name[0];
    }
    return view('pages.Title', compact('page_title', 'user', 'user', 'abb', 'datas', 'old'));
  }

  public function store(Request $request)
  {

    $input = $request->except('_token');

    DB::beginTransaction();
    try {
      $input['created_by_user_id'] = $request->user()->getAuthIdentifier();
      $data = new Title($input);
      $datas = Title::all();

      foreach ($datas as $elt) {
        if (strtolower($data->title) == strtolower($elt->title))
          return redirect()->back()->with('error', 'Un titre avec le même nom a déjà été enrégistré');
      }
      $data->save();
      DB::commit();
      return redirect('/my_space/title')->with('success', 'L\'titre ' . $input['title'] . ' a été ajouté enrégistré avec succsès');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }

  public function destroy($id)
  {
    $data = Title::find($id);

    if (empty($data))
      return redirect()->back()->with('error', 'titre non trouvé');

    DB::beginTransaction();
    try {
      $data->delete();
      DB::commit();
      return redirect('/my_space/itle')->with('success', 'Suppression effectué');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }
}
