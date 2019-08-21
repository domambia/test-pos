<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillables = [
        'name', 'description', 'slug'
    ];

    //Relations
    public function products(){
        return $this->hasMany(Product::class);
    }
}
