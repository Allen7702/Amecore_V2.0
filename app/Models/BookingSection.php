<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSection extends Model
{
    use HasFactory;

    protected $fillable= ['section_title','section_subtitle','section_description','icon_path','icon_title','icon_description'];
    
}
