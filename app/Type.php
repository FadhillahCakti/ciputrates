<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "m_type";
    protected $fillable = ['type_id','cluster_id','type','price','description'];
   
 public function salesdetail () 
    {
        return $this->hasMany ('App\Salesdetail');
    }

    public function cluster () 
    {
        return $this->belongsTo ('App\Cluster');
    }

}