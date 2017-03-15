<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Paypal extends Model
{
    protected $table = 'customer_paypal';
    
    public function customer()
    {
        return $this->belongsTo('App\Customer','customerID');
    }
}
