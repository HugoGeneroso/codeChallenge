<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cupom;

class CupomController extends Controller
{
  public function check(Request $request)
  {
      //checa se o cupom é válido
      $cupom = Cupom::where('code', $request->code)->where('usado', 0)->first();
      
      return response()->json($cupom);
  }
}
