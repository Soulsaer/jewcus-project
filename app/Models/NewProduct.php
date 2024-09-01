<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'categories_ids',
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
    ];

    protected $casts = [
        'categories_ids' => 'array',
        'other_meta_info' => 'array',
    ];
}
