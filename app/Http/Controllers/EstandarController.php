<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstandarController extends Controller
{
    public function index(){
        return view('Estandar.index');
    }
}
