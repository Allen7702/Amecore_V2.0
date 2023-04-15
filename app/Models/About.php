<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable =['title',
    'title_image',
    'heading',
   'description',
   'icon_name',
   'icon',
   'image',
    'button_text',
    'show_button'];


}
