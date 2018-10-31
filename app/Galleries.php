<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $table = 'galleries';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;
}
