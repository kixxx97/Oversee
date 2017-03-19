<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Workflow extends Model
{
    protected $table = 'employee_assigned_workflow';
    
    protected $fillable = array('employeeID','workFlowID','status');
    
    
    public function employee()
    {
        return $this->belongsTo('App\Employee','employeeID');
    }
    public function workflow()
    {
        return $this->belongsTo('App\Workflow','workFlowID');
    }
    
    public function productivity()
    {
        return $this->hasMany('App\productivity','employeeAssignedWorkFlowID');
    }
    
    
    
}
