<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends Model
{
    use HasSlug, SoftDeletes;

    protected $guarded = ['id'];

    protected $attributes = [
        'show_breadcrumbs' => false,
        'show_title' => true
    ];

    protected $casts = [
        'show_breadcrumbs' => 'boolean',
        'show_title' => 'boolean'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFeaturedImageUrlAttribute()
    {
        return asset('storage/' . $this->featured_image);
    }

    public function hasFeaturedImage()
    {
        return $this->featured_image ? true : false;
    }

    public function seoTitle()
    {
        return $this->title;
    }

    public function seoDescription()
    {
        if ($this->excerpt) {
            return $this->excerpt;
        }

        return $this->content ? Str::substr(strip_tags($this->content), 0, 200) : null;
    }

    public function seoImage()
    {
        if ($this->hasFeaturedImage()) {
            return $this->featured_image_url;
        }

        return null;
    }
}
