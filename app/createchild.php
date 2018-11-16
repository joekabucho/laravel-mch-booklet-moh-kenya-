<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createchild extends Model
{
    protected $fillable= ['child_name','date_of_birth','mothers_name','parity','weight','status'];
    public function child()
    {
        return $this->belongsTo('App\maternal');
    }
}
