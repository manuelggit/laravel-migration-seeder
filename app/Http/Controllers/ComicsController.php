<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
  public function index(){

    $comic = Comic::all();
    // dd($comic);

    return view('comics', compact('comic'));
  }
}
