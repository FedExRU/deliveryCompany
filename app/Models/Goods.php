<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function supplier()
    {
    	return $this->belongsTo('App\Models\Suppliers');
    }
}
