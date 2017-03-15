<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    
    public function stock()
    {
        return $this->belongsTo('App\Replenish_Stock','supplierID');
    }
}
