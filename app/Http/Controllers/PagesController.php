<?php

namespace Egresados\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('Pages.Index');
    }

    public function EmpresasEmpleadorasView(){

    	return view('Pages.EmpresaEmpleadoras');
    }
}