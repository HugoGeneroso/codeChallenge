<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    //
    protected $fillable = [
        'discount_percentage', 'code', 'usado'
    ];
}
