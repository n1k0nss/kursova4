<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        return $this->products->sum(function ($product) {
            return $product->getPriceForCount();
        });
    }

    public function getTotalProductCount()
    {
        return $this->products->sum('pivot.count');
    }
}
