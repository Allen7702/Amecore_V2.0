<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of gallery
 */
class gallery extends Model
{
    use HasFactory;
    /**
     * Summary of uploads
     * @var string
     */
    public $uploads = '/website/img/';
    protected $fillable =['image'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $this->uploads.$image
        );
    }

}
