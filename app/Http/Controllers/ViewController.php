<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ViewController extends Controller
{
  public function index(){
    return view('index');
  }
  public function faqs(){
    return view('faqs');
  }
  public function italy(){
    return view('italy');
  }
  public function spain(){
    return view('spain');
  }
  public function england(){
    return view('england');
  }
  public function france(){
    return view('france');
  }
  public function contact(){
    return view('contact');
  }
  // public function agregarProducto(){
  //   return view('agregarProducto');
  // }

}
