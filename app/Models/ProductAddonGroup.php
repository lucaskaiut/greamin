<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAddonGroup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function addonGroup()
    {
        return $this->belongsTo(AddonGroup::class);
    }

    public function addons()
    {
        return $this->hasMany(ProductAddonGroupAddon::class);
    }
}
