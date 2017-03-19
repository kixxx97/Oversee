<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raw_Materials;
use App\Product;
use App\Job_Order;
use App\Job_Order_details;
use App\User;
use App\Employee;
use Illuminate\Support\Facades\Hash;

class oversee extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(\Auth::check() == null)
        {
            return redirect('login');
        }
    }
    

    public function custJobOrder()
    {
        return view('custJobOrder');
    }
    public function employee()
    {
        return view('employee');
    }
    public function storeEmployee(Request $request)
    {
        $empId = $request->input('empId');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $contactNum = $request->input('contactNum');
        $email = $request->input('email');
        $assignedWork = $request->input('assignedWork');
        
        $userId = User::create
        ([
            "username" => $firstName[0].$lastName,
            "email" => $email,
            "password" => Hash::make($firstName[0].$lastName),
        ])->id;
        
        Employee::create
        ([
            "employeeID" => $empId,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "middleInitial" => "",
            "gender" => "",
            "birthdate" => \Carbon\Carbon::now(),
            "hiredate" => \Carbon\Carbon::now(),
            "status" => "",
            "userID" => $userId
        ]);
        
        return view('employee');
    }
    public function inventory()
    {
        $rawMats = Raw_Materials::where('status','active')->get();
        $products = Product::where('status','active')->get();
        return view('inventory', compact('rawMats','products'));
    }
    public function jobOrder()
    {
        return view('joborder');
    }
    public function purchase()
    {
        return view('purchase');
    }
    public function stockJobOrder()
    {
        return view('stockJobOrder');
    }
    public function supplier()
    {
        return view('supplier');
        
    }
    public function viewJobOrder(){
        return view('viewjoborder');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function report()
    {
        return view('reports');
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
    
    public function editProduct($id)
    {
        $product = Product::where('productID',$id)->firstOrFail();
        
        
        return view('editProduct',compact('product'));
    }
    
        public function jobOrderCreate(Request $request)
    {
        

        $resp = Job_Order::create([
           'customerID' => null,
           'employeeID' => \Auth::user()->id,
           'orderDateTime' => \Carbon\Carbon::now(),
           'deliveryDateTime' => \Carbon\Carbon::now(),
           'grandTotalAmount' => null,
           'type' => 'Stock',
           'status' => 'Ongoing',
           'taxValue' => null
        ]);
        $jobOrderID = $resp->joborderID;
        foreach($request->input('product') as $product)
        {
            if($product['qty'] != 0)
            {
            $prodID = $product['id'];
            $prod = Product::where('productID',$prodID)->firstOrFail();
            $total = $prod->unitPrice * $product['qty'];
            
            Job_Order_details::create([
            'jobOrderID' => $jobOrderID,
            'productID' => $prodID,
            'quantityOrdered' => $product['qty'],
            'totalAmount' => null,
            'status' => 'Ongoing',
            'dateTimeFinished' => \Carbon\Carbon::now()
            ]);
            }
        }
    }
}