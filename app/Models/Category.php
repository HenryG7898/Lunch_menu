<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['category-nm','category-desc'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
