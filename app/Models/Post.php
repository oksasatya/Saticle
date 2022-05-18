<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;

class Post extends Model
{
    use HasFactory, HasPermissions;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published',
        'tag',
        'image',
        'author',
    ];

    public $timestamps = true;

    // relation with tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withPivot('created_at');
    }
}
