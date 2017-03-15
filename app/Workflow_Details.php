<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workflow_Details extends Model
{
    protected $table = 'work_flow_details';
    
    public function workflow()
    {
        return $this->belongsTo('App\Workflow','workFlowID');
    }
    
    public function rawMaterials()
    {
        return $this->belongsTo('App\Raw_Materials','rawMaterialsID');
    }
}
