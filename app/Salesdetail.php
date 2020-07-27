<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesdetail extends Model
{
    protected $table = "td_salesdetail";
    protected $fillable = ['salesdetail_id','sales_id','cluster_id','type_id','price', 'qty', 'total'];
   
 public function sales () 
    {
        return $this->belongsTo ('App\Sales');
    }

    public function cluster () 
    {
        return $this->belongsTo ('App\Cluster');
    }

    public function type () 
    {
        return $this->belongsTo ('App\Type');
    }

}