<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    
    protected $table = "file";

    public function kegiatan()
    {
        return $this->belongsTo('App\Models\kegiatan','id_kegiatan');
    }
}
