<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'image_path', 'icon'];

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
