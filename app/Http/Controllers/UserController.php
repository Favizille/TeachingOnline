<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allLessons(){
        return view("User.lessons");
    }
}
