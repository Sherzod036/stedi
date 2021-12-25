<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'usage', 'chars', 'category_id', 'lang_id'];

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
