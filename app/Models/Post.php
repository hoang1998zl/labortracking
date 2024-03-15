<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = "posts";
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'is_published'
    ];
    protected $casts = [
        'is_published' => 'boolean'
    ];
    function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
