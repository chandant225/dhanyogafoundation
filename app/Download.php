<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Download extends Model
{
    protected $guarded = ['id'];

    public function fileUrl()
    {
        return Storage::url($this->file_path);
    }
}
