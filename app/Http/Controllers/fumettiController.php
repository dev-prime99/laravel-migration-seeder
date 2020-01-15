<?php

namespace App\Http\Controllers;

use App\Fumetti;
use Illuminate\Http\Request;

class fumettiController extends Controller
{
  public function index()
  {
    $fumetti= Fumetti::all();
    return view("fumetti",compact("fumetti"));
  }
}
