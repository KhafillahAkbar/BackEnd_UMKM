<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $customer = Customer::where('cust_name','LIKE','%' .$request->search. '%')
            -> orwhere('cust_username','LIKE','%' .$request->search. '%')
            -> orwhere('cust_address','LIKE','%' .$request->search. '%')->get();
        }else{
            $customer = Customer::all();
        }
       return view('customer.index', compact(['customer']));
    }
    public function show($id)
    {
    $customer = Customer::find($id);
    return view('customer.detail', compact('customer'));
    }
}
