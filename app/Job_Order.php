<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Order extends Model
{
    protected $table = 'job_order';
    
    public function customer()
    {
        return $this->belongsTo('App\Customer','customerID');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee','employeeID');
    }
    public function jobOrderDetails()
    {
        return $this->hasMany('App\Job_Order','jobOrderID');
    }
}
