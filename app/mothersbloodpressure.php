<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mothersbloodpressure extends Model
{
    protected $fillable= ['month',
        'systole', 'diastole'];
}
