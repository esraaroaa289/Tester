<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function ShowString()
    {
        return 'esraa';
    }
    public function ShowString1()
    {
         $this->middleware('auth');
    }
    public function ShowString2()
    {
        return 'esraa2';
    }
}
