<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tools;

class PagesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $page_title = 'Tableau de bord';
    $page_description = 'Some description for the page';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];

    return view('pages.dashboard', compact('page_title', 'page_description', 'user', 'abb'));
  }

  public function profil()
  {
    $page_title = 'profil';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name) {
      $abb .= $name[0];
    }
    return view('pages.profil', compact('page_title', 'user', 'user', 'abb'));
  }

  public function user()
  {
    $page_title = 'user';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name) {
      $abb .= $name[0];
    }
    return view('pages.user', compact('page_title', 'user', 'user', 'abb'));
  }

  public function plan_vol()
  {
    $page_title = 'Plans de vol';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];
    
    return view('pages.plan_vol', compact('page_title', 'user', 'user', 'abb'));
  }

  public function facturation()
  {
    $page_title = 'Facturations';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];
    
    return view('pages.facturation', compact('page_title', 'user', 'user', 'abb'));
  }

  public function bip()
  {
    $page_title = 'BIP';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];
    
    return view('pages.bip', compact('page_title', 'user', 'user', 'abb'));
  }

  public function dossier_vol()
  {
    $page_title = 'Dossier de Vol';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];
    
      $uri = 'api.openweathermap.org/data/2.5/weather?q=Yaoundé&APPID=ea51d48e281dbed0f3b419c9808ce9ab';
      $ch = curl_init();
  
      curl_setopt($ch, CURLOPT_URL, $uri);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json','X-AUTH-TOKEN: MON_TOKEN'));
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
      $data = curl_exec($ch);
  
      if ($data !== false)
        $status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
      
      curl_close($ch);
  
      if ($data !== false && $status === 200)
        $decoded = json_decode($data);

    return view('pages.dossier_vol', compact('page_title', 'user', 'user', 'abb', 'decoded'));
  }

  public function dossier_meteo()
  {
    $page_title = 'Dossier Météo';
    $user = Auth::user();
    $abb = '';
    $decoded = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];

    $uri = 'api.openweathermap.org/data/2.5/weather?q=Yaoundé&APPID=ea51d48e281dbed0f3b419c9808ce9ab';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $uri);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json','X-AUTH-TOKEN: MON_TOKEN'));
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    if ($data !== false)
	    $status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    
    curl_close($ch);

    if ($data !== false && $status === 200)
      $decoded = json_decode($data);

    return view('pages.dossier_meteo', compact('page_title', 'user', 'user', 'abb', 'decoded'));
  }

  public function add_plan_vol(Request $request) {
    return redirect()->back()->with('success', 'Le Plan de vol a été enrégistré avec succsès');
  }
}
