<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    public function index()
    {
        $juegos = Juego::all();
        return view('juegos',compact('juegos'));
    }
}
