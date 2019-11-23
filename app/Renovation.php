<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
{
    protected $fillable = [
        'title',
        'state',
        'typeintervention',
        'year',
        'quality',
        'totalcost',
        'actualcost'
    ];
}
