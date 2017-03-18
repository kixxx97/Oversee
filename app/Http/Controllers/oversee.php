<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raw_Materials;
use App\Product;


class oversee extends Controller
{
    
    
    public function create(Request $request)
    {
        
    }
    public function cart(Request $request)
    {
        dd($request);
    }
    public function rawMatsCreate(Request $request)
    {
//        dd($request->input('mname'));
        $resp = Raw_Materials::create([
            'rawMaterialName' => $request->input('mname'),
            'rawMaterialDescription' => $request->input('description'),
            'reOrderPoint' => $request->input('reorderpt'),
            'quantityAvailable' => $request->input('count'),
            'status' => 'active'
        ]);
        
        return redirect('inventory');
    }
    public function prodCreate(Request $request)
    {
//        dd($request->input('pname'));
        $resp = Product::create([
            'productName' => $request->input('pname'),
            'productDescription' => $request->input('description'),
            'unitPrice' => $request->input('price'),
            'quantityAvailable' => 0,
            'status' => 'active'
        ]);
        
        return redirect('inventory');
    }
}
