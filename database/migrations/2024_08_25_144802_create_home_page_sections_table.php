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
        Schema::create('home_page_sections', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('page_name', 150);
            $table->string('section_1_heading', 150)->nullable();
            $table->string('section_1_sub_heading', 150)->nullable();
            $table->json('section_1_images')->nullable();
            $table->json('section_1_images_alt')->nullable();
            $table->json('section_1_images_url')->nullable();
            $table->json('section_1_images_text')->nullable();
            $table->string('section_4_sub_heading', 255)->nullable();
            $table->string('section_4_heading', 150)->nullable();
            $table->string('section_4_image', 150)->nullable();
            $table->string('section_4_video', 150)->nullable();
            $table->string('section_4_btn_text', 150)->nullable();
            $table->string('section_4_btn_url', 150)->nullable();
            $table->string('section_8_heading', 150)->nullable();
            $table->string('section_8_sub_heading', 150)->nullable();
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page_sections');
    }
};
