<?php

namespace App\Http\Controllers; //donde proviene el archivo//

use Illuminate\Http\Request;  //capturar las solicitudes al cliente//

class Dashboardcontroller extends Controller //hijo de controller//
{
   public function index()
   {
       //dd("test");
       $title="prueba";
       return view('home.home');
   }
}
