<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'genre' , 'birthdate', 'cel',  'email',
    ];

}
