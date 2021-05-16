<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Faq extends Model
{
    protected $guarded = ['id'];

    public function scopePositioned($query)
    {
        return $query->orderBy('position');
    }

    public static function clearCache()
    {
        Cache::forget('faqs');
    }
}
