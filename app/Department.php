<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function scopePositioned($query)
    {
        return $query->orderByRaw('position IS NULL')->orderBy('position');
    }

    public function members()
    {
        return $this->hasMany(OurTeam::class, 'department_id');
    }
}
