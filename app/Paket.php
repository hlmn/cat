<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;

    public function layanan()
    {
    	return $this->belongsTo('App\Layanan', 'layanan_id');
    }
}
