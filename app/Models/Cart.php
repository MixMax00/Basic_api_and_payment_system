<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;

class Cart extends Model
{
    use HasFactory;


    public function products(){
    	return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function colors(){
    	return $this->hasOne(Color::class, 'id', 'color_id');
    }

    public function sizes(){
    	return $this->hasOne(Size::class, 'id', 'size_id');
    }
}
