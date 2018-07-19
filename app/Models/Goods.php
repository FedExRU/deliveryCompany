<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{	
	use Searchable;

    protected $table = 'goods';

    public function supplier()
    {
    	return $this->belongsTo('App\Models\Suppliers');
    }

   /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'goods_index';
    }

   /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->id;
    }
}
