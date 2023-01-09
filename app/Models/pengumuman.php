<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    use HasFactory;
    protected $table = "pengumuman";

    public function getCreatedAtAttribute()
    {
    
    return
     \Carbon\Carbon::parse($this->attributes['created_at'])
       ->format('d F Y');
    }
}
