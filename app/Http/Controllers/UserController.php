<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function getUser(){
    if (Auth::user()){
        return response()->json(Auth::user());
    }else{
        return response()->json('Não autorizado');
    }
  }
}
