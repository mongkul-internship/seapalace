<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
