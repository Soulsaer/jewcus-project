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
        Schema::create('new_products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 155)->nullable();
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->json('categories_ids')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('other_meta_info')->nullable();
            $table->string('product_sku')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('product_weight', 8, 2)->nullable();
            $table->decimal('price_in_india', 10, 2)->nullable();
            $table->decimal('price_in_us', 10, 2)->nullable();
            $table->decimal('special_price_india', 10, 2)->nullable();
            $table->decimal('special_price_us', 10, 2)->nullable();
            $table->string('url_key')->nullable();
            $table->string('metal')->nullable();
            $table->string('gemstones')->nullable();
            $table->string('plating')->nullable();
            $table->string('setting')->nullable();
            $table->string('stone_shape')->nullable();
            $table->string('stock_status')->default('in_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_products');
    }
};
