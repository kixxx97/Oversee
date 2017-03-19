<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Order_details extends Model
{
    protected $table = 'job_order_details';
    
    protected $primaryKey = 'jobOrderDetailsID';
    
    protected $fillable = array('jobOrderID',
            'productID',
            'quantityOrdered',
            'totalAmount',
            'status',
            'dateTimeFinished');
    
    public function jobOrder()
    {
        return $this->belongsTo('App\Job_Order','jobOrderID');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Product','productID');
    }
    
    public function productivity()
    {
        return $this->hasMany('App\Productivity','jobOrderDetailsID');
    }
}
