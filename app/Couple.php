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
        'husband_id', 'wife_id',
    ];

}