<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'slug', 'category_id', 'posted', 'description', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
