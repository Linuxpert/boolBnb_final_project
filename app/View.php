<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'data_views',

    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
