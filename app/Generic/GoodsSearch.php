<?php

namespace App\Generic;

use App\Traits\DataLoader;
use App\Models\Goods;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class GoodsSearch extends Model
{
	use DataLoader;

    public $sortPrice;

    public $sortRank;

    public $q;

    public static function search(array $attributes, int $pagination = 30):LengthAwarePaginator 
    {
    	$searchModel = new self;

    	$searchModel->loadAttributes($attributes);

        if(!is_null($searchModel->q))
            $goods = Goods::search($searchModel->q);
        else
            $goods = Goods::query();

        if(!is_null($searchModel->sortRank))
            $goods->orderBy('rank', $searchModel->sortRank);

        if(!is_null($searchModel->sortPrice))
            $goods->orderBy('price', $searchModel->sortPrice);

        return $goods->paginate($pagination);
    }

}
