<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

use App\Models\Tools;

class ToolsController extends Controller
{

  public function index()
  {
    $page_title = 'Instruments';
    $user = Auth::user();
    $abb = '';
    $datas = Tools::all();
    $old = isset($_GET['id']) ? Tools::find($_GET['id']) : null;

    foreach (explode(' ', $user->name) as $name) {
      $abb .= $name[0];
    }
    return view('pages.tools', compact('page_title', 'user', 'user', 'abb', 'datas', 'old'));
  }

  public function store(Request $request)
  {

    $input = $request->except('_token');

    DB::beginTransaction();
    try {
      $input['created_by_user_id'] = $request->user()->getAuthIdentifier();
      $tool = new Tools($input);
      $tools = Tools::all();

      foreach ($tools as $elt) {
        if (strtolower($tool->nom) == strtolower($elt->nom))
          return redirect()->back()->with('error', 'Un instrument avec le même nom a déjà été enrégistré');
      }
      $tool->save();
      DB::commit();
      return redirect('/my_space/tools')->with('success', 'L\'instrument ' . $input['nom'] . ' a été ajouté enrégistré avec succsès');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }

  public function destroy($id)
  {
    $tool = Tools::find($id);

    if (empty($tool))
      return redirect()->back()->with('error', 'Instrument non trouvé');

    DB::beginTransaction();
    try {
      $tool->delete();
      DB::commit();
      return redirect('/my_space/tools')->with('success', 'Suppression effectué');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }
}
