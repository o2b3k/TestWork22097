<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property string $name
 * @property string $slug
 * @property string $image
 */

class Category extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'slug', 'image'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'category_id');
    }
}
