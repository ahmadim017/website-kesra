<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $table = "kegiatan";

    public function file()
    {
        return $this->hasMany('App\Models\file');
    }
}