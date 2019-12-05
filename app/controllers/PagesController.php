<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {

  public function home() {
    return view('home');
  }

  public function about() {
    $nome = 'Juan';
    $last = 'Soares';

    return view('about', compact('nome', 'last'));
  }

  public function contact() {
    return view('contact');
  }

  public function aboutCulture() {
    return view('about-culture');
  }

}
