<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
	protected $table = 'layanan';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;

    public function paket()
    {
    	return $this->hasMany('App\Paket', 'layanan_id');
    }
}
