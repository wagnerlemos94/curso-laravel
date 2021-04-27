<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(category::class, 'posts_categories','post','category');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
