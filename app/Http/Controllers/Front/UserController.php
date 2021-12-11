<?php

namespace App\Http\Controllers\Front;




use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function ShowUserName()
    {
        return "Ahmed Emam";
    }
 /*   public function getIndex()
    {
        $data=[];
        $data["id"] = 5;
        $data["name"] = "ahmed";
        return view("welcome", $data);
    }*/
    public function getIndex()
    {
        $data =[];
        //return view("welcome")->with("data", $data);
        return view("welcome", compact("data"));
    }
}

