<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use validate;

class CustomerController extends Controller
{

   public function customerIndex(Request $request) {
      return view('customer_index');
   }

   	public function customerCreate(Request $request) {
		$this->validate($request,[
	        'name'=> 'required|max:10',
	        'email'=> 'required|email',
	        'Mobile_number'=> 'required|max:10|min:10',
	    ]);

	   	$data = new Customer();
	   	$data->name = $request->name;
	   	$data->email = $request->email;
	   	$data->mobile = $request->Mobile_number;
	   	$data->save();
	   	return redirect()->back();
    }

   	public function getCustomerDetails(Request $request) {
   		return view('get_customer_details');
   	}

   	public function readCustomerDetails(Request $request) {
   		$data = Customer::all();
   		$json_data = json_encode($data);
   		return $json_data;
   	}   
}