<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = "th_sales";
    protected $fillable = ['sales_id','customer_id','sales_date','notes','total_sales_prices'];
    public function customer () 
    {
        return $this->hasOne ('App\Customer');
    }

    public function salesdetail () 
    {
        return $this->hasMany ('App\Salesdetail');
    }
}