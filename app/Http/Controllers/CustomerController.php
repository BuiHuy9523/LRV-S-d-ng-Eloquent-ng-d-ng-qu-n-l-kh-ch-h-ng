<?php

namespace App\Http\Controllers;

use App\Customer;
use DemeterChain\C;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customer = Customer::all();
        return view('customers.home', compact('customer'));
    }
    public function create(){
        return view('customers.create');
    }
    public function insert(Request $request){
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');
        $customer->save();
        return redirect()->route('list');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer', 'id'));
    }
    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->dob = $request->dob;
        $customer->save();
        return redirect()->route('list');
    }
    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('list');
    }
}
