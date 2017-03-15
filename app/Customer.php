<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    
    public function customerPaypal()
    {
        return $this->hasMany('App\Customer_Paypal','customerID');
    }
    
    public function jobOrders()
    {
        return $this->hasMany('App\Job_Order','customerID');
    }
}
