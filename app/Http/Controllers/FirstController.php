<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
   public function index()
   {
      $data = [];
      $data['name'] = 'Esraa Ahmed';
      $data['age'] = 25;

      $obj = new \stdClass();
      $obj -> name = 'ahmed';
      $obj -> id = 25;
      $obj -> gender = 'Female';

      $arr = ['esraaa' , 'ahmed'];

      return view('welcome' , compact('arr'));
   }
}
