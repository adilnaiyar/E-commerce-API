<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function products()
    {
    	return $this->belongsTo('App\Model\Product', 'product_id');
    }
}
