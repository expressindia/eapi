<?php

namespace App\Model;
use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // relation between Review and product model
    public function product(){
      return $this->belongsTo(Product::class);
    }
}
