<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = "actor";
    protected $primaryKey = "actor_id";

    public $timestamps = false;

}
