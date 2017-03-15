<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    protected $table = 'work_flow';
    
    public function product()
    {
        return $this->belongsTo('App\Product','productID');
    }
    
    public function workflowDetails()
    {
        return $this->belongsTo('App\Workflow_Details','workFlowID');
    }
    
    public function employeeAssigned()
    {
        return $this->belongsTo('App\Job_Order_details','workFlowID');
    }
    
    public function RequestEmployee()
    {
        return $this->belongsTo('App\Job_Order_details','replenishStockID');
    }
    
    public function workflow()
    {
        return $this->belongsTo('App\Workflow','workFlowID');
    }
}
