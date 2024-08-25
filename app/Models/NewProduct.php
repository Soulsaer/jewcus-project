<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'meta_title',
        'meta_description',
        'other_meta_info',
        'product_sku',
        'quantity',
        'product_weight',
        'price_in_india',
        'price_in_us',
        'special_price_india',
        'special_price_us',
        'url_key',
        'metal',
        'gemstones',
        'plating',
        'setting',
        'stone_shape',
        'stock_status',
        'image',
        'description',
        'categories_ids'
    ];
}
