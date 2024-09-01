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
        Schema::create('faq_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('midblog_image',155);
            $table->string('banner_heading',255);
            $table->string('slug')->unique();
            $table->string('author');
            $table->date('date');
            $table->text('description');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('faq_blogs');
    }
};
