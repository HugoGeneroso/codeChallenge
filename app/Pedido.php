<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $fillable = [
      'id_plano', 'id_user', 'discount_percentage', 'id_discount', 'payment_chosen', 'total_price', 'installments'
  ];
}
