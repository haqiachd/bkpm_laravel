<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    function login(){

    }

    public function bot(){
        Route::pattern('id', '[0-9]+');
    
        parent::boot();
    }
}
