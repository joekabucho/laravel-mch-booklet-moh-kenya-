<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class previous_pregnancy extends Model
{
    protected $fillable= ['pregnancyorder','year','placeofdelivery','maturity','durationoflabour','typeofdelivery','weight','sex','outcome','perpetium'];
}
