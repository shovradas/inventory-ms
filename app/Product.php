<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'name',
        'detail'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
