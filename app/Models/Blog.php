<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property int $view_count
 * @property int $category_id
 */

class Blog extends Model
{
    use HasSlug;

    protected $fillable = ['title', 'slug', 'description', 'image', 'view_count', 'category_id'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
