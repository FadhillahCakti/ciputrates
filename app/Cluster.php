<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $table = "m_cluster";
    protected $fillable = ['cluster_id','cluster','description'];
    public function salesdetail () 
    {
        return $this->hasMany ('App\Salesdetail');
    }

    public function type () 
    {
        return $this->hasMany ('App\Type');
    }
}