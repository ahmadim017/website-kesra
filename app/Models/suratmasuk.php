<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratmasuk extends Model
{
    use HasFactory;
    protected $table = "suratmasuk";

    public function opd()
    {
        return $this->belongsTo('App\Models\opd','id_opd');
    }
}
