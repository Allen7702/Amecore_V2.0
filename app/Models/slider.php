<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    public $uploads = '/website/img/';
    protected $fillable =['title_red','title_white','image','description','button_text','show_button'];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $this->uploads.$image
        );
    }
}
