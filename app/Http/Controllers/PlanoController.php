<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plano;

class PlanoController extends Controller
{
  public function show($id)
  {
      //Apenas por praticidade optei por pegar a primeira entrada do banco para o exemplo
      $plano = Plano::findOrFail($id);
      return $plano;
  }
}
