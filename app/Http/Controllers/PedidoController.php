<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Cupom;
use App\Plano;
use Auth;
class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
      $plano = Plano::where('id', $data->id_plano)->first();
      $user = Auth::user();
      $cupom = Cupom::where('code', $data->cupom)->where('usado', 0)->get();

      //se um cupom não usado for encontrado ele aplica o desconto e marca o cupom como usado
      if(count($cupom) > 0)
      {
        $discount = $plano['price'] * $cupom[0]['discount_percentage'] / 100;
        $totalPrice = $plano->price - $discount;
        $cupom['usado'] = 1;
        $discount_id = $cupom[0]['id'];
        $cupom[0]->save();
      } else {
        $totalPrice = $plano->price;
        $discount_id = 0;
      }

      //cria o pedido no db
      $pedido = Pedido::create([
          'id_plano' => $plano['id'],
          'id_user' => $user['id'],
          'id_discount' => $discount_id,
          'payment_chosen' => $data['payment_chosen'],
          'total_price' => $totalPrice
      ]);
      return response()->json($pedido);
    }

}
