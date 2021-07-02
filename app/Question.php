<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
