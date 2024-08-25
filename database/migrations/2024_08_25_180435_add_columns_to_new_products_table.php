<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_products', function (Blueprint $table) {
            $table->renameColumn('price', 'price_in_india');
        });

        Schema::table('new_products', function (Blueprint $table) {
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('other_meta_info')->nullable();
            $table->string('product_sku')->unique();
            $table->integer('quantity')->default(0);
            $table->decimal('product_weight', 8, 2)->nullable();
            $table->decimal('price_in_india', 10, 2)->nullable()->change();
            $table->decimal('price_in_us', 10, 2)->nullable();
            $table->decimal('special_price_india', 10, 2)->nullable();
            $table->decimal('special_price_us', 10, 2)->nullable();
            $table->string('url_key')->unique();
            $table->string('metal')->nullable();
            $table->string('gemstones')->nullable();
            $table->string('plating')->nullable();
            $table->string('setting')->nullable();
            $table->string('stone_shape')->nullable();
            $table->string('stock_status')->default('in_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_products', function (Blueprint $table) {
            $table->dropColumn([
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
                'stock_status'
            ]);
        });
    }
};
