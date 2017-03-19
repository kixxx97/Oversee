<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    
    protected $fillable = [
        'employeeID','firstName','lastName','middleInitial','gender','birthdate','hiredate','status','userID'
    ];
    public function jobOrder()
    {
        return $this->hasMany('App\Job_Order','employeeID');
    }
    
    public function attendance()
    {
        return $this->hasMany('App\Attendance','employeeID');
    }
    
    public function recievedStocks()
    {
        return $this->hasMany('App\Replenish_Stock','recievedEmpID');
    }
    
    public function requestedStocks()
    {
        return $this->hasMany('App\Replenish_Stock','requestedEmpID');
    }
    
    
}
