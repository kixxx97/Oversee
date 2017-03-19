<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_Materials extends Model
{
    protected $table = 'raw_materials';
    
    protected $primaryKey = 'rawMaterialsID';
    
    
    protected $guarded = ['rawMaterialsID'];
    
    public function workflowDetails()
    {
        return $this->hasMany('App\Workflow','rawMaterialsID');
    }
    
    public function stockDetails()
    {
        return $this->hasMany('App\Replenish_Stock_Details','rawMaterialsID');
    }
}
