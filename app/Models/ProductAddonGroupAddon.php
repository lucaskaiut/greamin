<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAddonGroupAddon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productAddonGroup()
    {
        return $this->belongsTo(ProductAddonGroup::class);
    }
}
