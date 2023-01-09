<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class proposallembaga extends Model
{
    use HasFactory;
    protected $table = 'proposallembaga';
    public function user()
    {
        return $this->belongsTo('App\Models\User','created_by');
    }

    public function verifikasi()
    {
        return $this->belongsTo('App\Models\User','verifikasi');
    }

    public function getCreatedAtAttribute()
    {
    
    return
     Carbon::parse($this->attributes['created_at'])
       ->format('d F Y');
    }
}
