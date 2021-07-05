<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class OurTeam extends Model
{
    use SoftDeletes, HasSlug;

    protected $guarded = ['id'];

     /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function scopePositioned($query)
    {
        return $query->orderByRaw('position IS NULL')->orderBy('position');
    }

    public function photoUrl()
    {
        return $this->photo
            ? Storage::url($this->photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=1e94a1';
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
