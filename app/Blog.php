<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'canonical',
        'meta_description',
        'description',
        'image_path',
        'category_id',
        'user_id',
        'is_published',
    ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, "blog_tags");
    }
}

