<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'name', 'lastname', 'genre' , 'birthdate', 'cel',  'email',
    ];
    
    public function address() {
        return $this->belongsTo('App\Address');
    }
}