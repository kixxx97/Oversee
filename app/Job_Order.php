<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Order extends Model
{
    protected $table = 'job_order';
    
    protected $fillable = array('employeeID','customerID','orderDateTime','deliveryDateTime','grandTotalAmount','taxValue','status','type');
    
    protected $primaryKey = 'joborderID';
    protected $guard = ['jobOrderID'];
    public function maker()
    {
        if($this->type == 'Customer')
        return $this->belongsTo('App\Customer','customerID');
        else
        return $this->belongsTo('App\Employee','employeeID');
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
