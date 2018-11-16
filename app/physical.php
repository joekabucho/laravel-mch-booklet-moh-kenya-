<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class physical extends Model
{
    protected $fillable= ['general','cvs','respiration','breasts','abdomen','vaginal_examination','discharge_dud'];
}
