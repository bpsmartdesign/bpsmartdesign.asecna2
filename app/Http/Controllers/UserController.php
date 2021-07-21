<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{

  public function login()
  {

    if (Auth::check()) {
      if (Auth::user()->active) {
        return redirect()->route('dashboard');
      } else {
        return back()->withErrors([
          "Votre compte a été désactivé"
        ]);
      }
    }

    return view('auth.login');
  }

  public function register()
  {

    if (Auth::check())
      return redirect()->route('dashboard');

    return view('auth.register');
  }

  public function auth(Request $request)
  {
    if (Auth::check()) {
      if (Auth::user()->active)
        return redirect()->route('dashboard');
      else
        return back()->with('error', "Votre compte est désactivé. Contactez l'administrateur.");
    }

    $credentials = $request->only('email', 'password');

    dd(Auth::attempt($credentials));

    // if (Auth::attempt($credentials)) {
    //   dd('ok');
    // } else {
    //   dd('no');
    // }

    // if (auth()) {
    //   return redirect()->route('dashboard');
    // } else {
    //   return redirect()->route('login')->with('error', "Informations de connexion invalides.");
    // }
  }
}
