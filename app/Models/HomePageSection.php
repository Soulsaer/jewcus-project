<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageSection extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'home_page_sections';

    // Allow mass assignment for these fields
    protected $fillable = [
        'page_name',
        'section_1_heading',
        'section_1_sub_heading',
        'section_4_heading',
        'section_4_sub_heading',
        'section_4_image',
        'section_4_video',
        'section_4_btn_text',
        'section_4_btn_url',
        'section_8_heading',
        'section_8_sub_heading',
    ];


}
