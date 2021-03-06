<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'street', 'district', 'city' , 'state', 'zipcode',  'phone',
    ];
    
    public function person() {
        return $this->hasMany('App\Person');
    }
}