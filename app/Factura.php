<?php

namespace gym;
use gym\User;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='factura';

    public function cliente()
    {
    	 return $this->belongsTo(User::class, 'user_id');
    }
}
