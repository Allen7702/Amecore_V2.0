<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable =['category_id','gallery_id','title','description','is_published'];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function gallery(){
        return $this->belongsTo(gallery::class);
    } 
}
