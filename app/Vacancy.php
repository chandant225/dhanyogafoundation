<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $guarded = ['id'];

    public function applyLink()
    {
        return $this->apply_link ?: route('vacancy.show', $this->id);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
