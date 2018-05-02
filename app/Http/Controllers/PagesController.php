<?php

namespace Egresados\Http\Controllers;

use Illuminate\Http\Request;
use Egresados\vacants;
class PagesController extends Controller
{
    
    public function index()
    {
      $vacants = vacants::all();
      return view('Pages.Index')->with('vacants' , $vacants);
  }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
        $vacant = vacants::find($id);
        return view("Pages.ShowVacant")->with('vacant' , $vacant);
     }

     public function EmpresasEmpleadorasView(){

         return view('Pages.EmpresaEmpleadoras');
     }
 }