<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replenish_Stock_Details extends Model
{
    protected $table = 'replenish_stock_details';
    
    public function rawMaterials()
    {
        return $this->belongsTo('App\Raw_Materials','rawMaterialsID');
    }
    
    public function stock()
    {
        return $this->belongsTo('App\Job_Order_details','replenishStockID');
    }
}
