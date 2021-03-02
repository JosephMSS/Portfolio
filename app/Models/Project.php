<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
