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
    $page_title = 'Dashboard';
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
    
    return view('pages.dossier_vol', compact('page_title', 'user', 'user', 'abb'));
  }

  public function dossier_meteo()
  {
    $page_title = 'Dossier de Vol';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->name) as $name)
      $abb .= $name[0];

    // dd($abb);
    
    return view('pages.dossier_vol', compact('page_title', 'user', 'user', 'abb'));
  }
}
