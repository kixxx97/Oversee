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
use App\Workflow;
use App\Employee_Workflow;

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
        $employees = Employee::join('users', 'employee.userID', '=', 'users.id')->where('status','active')->get();
        return view('employee', compact('employees'));
    }
    public function storeEmployee(Request $request)
    {
        $empId = $request->input('empId');
        $role = $request->input('role');
        $firstName = $request->input('firstName');
        $middleInitial = $request->input('middleinitial');
        $lastName = $request->input('lastName');
        $gender = $request->input('optradio');
        $birthDate = $request->input('birthDate');
        $contactNum = $request->input('contactNum');
        $email = $request->input('email');
        
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
            "middleInitial" => $middleInitial,
            "gender" => $gender,
            "birthdate" => $birthDate,
            "hiredate" => \Carbon\Carbon::now(),
            "status" => "active",
            "userID" => $userId,
            "contactNumber" => $contactNum,
            "role" => $role
        ]);
        
        return redirect('employee');
    }
    public function inventory()
    {
        $rawMats = Raw_Materials::where('status','active')->get();
        $products = Product::where('status','active')->get();
        return view('inventory', compact('rawMats','products'));
    }
    public function jobOrder()
    {
        $jobOrders = Job_Order::where('status','Ongoing')->get();
        $products = Product::where('status','active')->get();
        return view('joborder', compact('products','jobOrders'));
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
        $rawMats = Raw_Materials::where('status','active')->get();
        $employees = Employee::where('status','active')->get();
        $workflows = Workflow::where('productID',$id)->get();
        $assigned = array();
        foreach($workflows as $workflow)
        {
            $assigned[] = Employee_Workflow::where('workFlowID',$workflow->workFlowID)->get();
        }
//        dd($assigned);
        return view('editProduct',compact('product','rawMats','employees','workflows','assigned'));
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
    public function checkProd()
    {
        return view('viewjoborder');
    }
    
    public function workflowCreate(Request $request)
    {
//        dd($request);
       $resp = Workflow::create([
       'productID' => $request->input('prodID'),
       'workFlowTitle' => $request->input('title'),
       'workFlowDescription' => $request->input('description'),
       'stepNumber' => $request->input('stepnumber'),
       'manHours' => $request->input('manhours'),
       'rawMaterialsID' => $request->input('rawMats'),
       'rawMatsQty' => $request->input('rawMatQty'),
       'payRate' => $request->input('payrate'),
       'prequisiteWorkFlowID' => $request->input('pre-prequisite'),
       'status' => 'active'
       ]);
       
       return redirect('/prod/'.$request->input('prodID').'/edit');
    }
    
    public function getEmployees()
    {
        $employees = Employee::where('status','active')->where('role','worker')->get();
        
        return response ()->json ($employees);
    }
    
    public function assign(Request $request)
    {
//        dd($request);
        $resp = Employee_Workflow::create([
        'employeeID' => $request->input('agent_id'),
        'workFlowID' => $request->input('workFlowID'),
        'status' => 'active'
        ]);
        return redirect('/prod/'.$request->input('prodID').'/edit');
    }
}