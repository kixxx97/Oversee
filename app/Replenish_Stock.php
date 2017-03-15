<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replenish_Stock extends Model
{
    protected $table = 'replenish_stock';
    
    public function supplier()
    {
        return $this->belongsTo('App\Supplier','supplierID');
    }
    
    public function RequestEmployee()
    {
        return $this->belongsTo('App\Employee','requestedByEmployeeID');
    }
    
    public function RecieveEmployee()
    {
        return $this->belongsTo('App\Employee','receivedByEmployeeID');
    }
    
    public function stockDetails()
    {
        return $this->hasMany('App\Replenish_Stock_Details','replenishStockID');
    }
}
