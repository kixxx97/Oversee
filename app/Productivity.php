<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productivity extends Model
{
    protected $table = 'productivity';
    
    public function jobOrderDetails()
    {
        return $this->belongsTo('App\Job_Order_details','jobOrderDetailsID');
    }
    
    public function employeeWorkflow()
    {
        return $this->belongsTo('App\Employee_Workflow','employeeAssignedWorkflowID');
    }
}
