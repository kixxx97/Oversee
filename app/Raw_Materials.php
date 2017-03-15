<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_Materials extends Model
{
    protected $table = 'raw_materials';
    
    public function workflowDetails()
    {
        return $this->hasMany('App\Workflow_Details','rawMaterialsID');
    }
    
    public function stockDetails()
    {
        return $this->hasMany('App\Replenish_Stock_Details','rawMaterialsID');
    }
}
