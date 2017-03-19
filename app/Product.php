<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    
    protected $primaryKey = 'productID';
    
    protected $fillable = array('productDescription', 'productName','unitPrice','quantityAvailable','status');
    
    protected $guard = ['productID'];   
  
    public function jobOrderDetails()
    {
        return $this->hasMany('App\jobOrderDetails','productID');
    }
    
    public function workflow()
    {
        return $this->hasMany('App\Workflow','productID');
    }
}
