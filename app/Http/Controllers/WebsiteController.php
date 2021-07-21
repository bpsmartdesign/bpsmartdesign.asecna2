<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
  public function index()
  {
    $page_title = 'Accueil';
    $page_description = 'Lorem ipsum dolor sit amet';

    return view('public.home', compact('page_title', 'page_description'));
  }

  public function about_us()
  {
    $page_title = 'A propos de Nous';
    $page_description = 'Lorem ipsum dolor sit amet';

    return view('public.about_us', compact('page_title', 'page_description'));
  }

  public function event()
  {
    $page_title = 'Tous nos évènements';
    $page_description = 'Lorem ipsum dolor sit amet';

    return view('public.event', compact('page_title', 'page_description'));
  }

  public function faq()
  {
    $page_title = 'Foire aux Questions';
    $page_description = 'Lorem ipsum dolor sit amet';

    return view('public.faq', compact('page_title', 'page_description'));
  }

  public function contact_us()
  {
    $page_title = 'Nous contacter';
    $page_description = 'Lorem ipsum dolor sit amet';

    return view('public.contact_us', compact('page_title', 'page_description'));
  }

}
