<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderProductAddons()
    {
        return $this->hasMany(OrderProductAddon::class);
    }

    public function productAddonGroupAddons()
    {
        return $this->hasMany(ProductAddonGroupAddon::class);
    }
}
