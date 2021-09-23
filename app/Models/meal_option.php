<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal_option extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_nm',
    ];

    public function option(){
        return $this->belongsTo('App\Models\meal_category');
    }
}
