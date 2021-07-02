<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerApplication extends Model
{
    protected $guarded = ['id'];

    public function scopeRead($query)
    {
        return $query->whereNotNull('read_at');
    }

    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
