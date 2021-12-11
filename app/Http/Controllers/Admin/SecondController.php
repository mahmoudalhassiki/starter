<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("showString");
    }
    public function showString(){
        return "static string";
    }
    public function showString0(){
        return "static string0";
    }
    public function showString1(){
        return "static string1";
    }
}
