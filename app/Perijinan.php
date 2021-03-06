<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perijinan extends Model
{

     /* The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perijinan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = "id";
}
