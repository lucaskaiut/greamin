<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductAddon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orderProduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }

    public function productAddonGroupAddon()
    {
        return $this->belongsTo(ProductAddonGroupAddon::class);
    }
}
