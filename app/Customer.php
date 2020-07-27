<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "m_customer";
    protected $primaryKey = "customer_id";
    protected $fillable = ['customer_id','name','address','telp','email'];
    public function sales () 
    {
        return $this->hasMany ('App\Sales');
    }

}