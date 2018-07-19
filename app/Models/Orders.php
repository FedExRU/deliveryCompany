<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DataLoader;

class Orders extends Model
{
    use DataLoader;

    public function good()
    {
    	return $this->belongsTo('App\Models\Goods');
    }
}
