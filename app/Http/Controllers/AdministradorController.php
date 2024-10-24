<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrador']);
    }

    public function index(){
        return view('Admin.index');
    }
}
