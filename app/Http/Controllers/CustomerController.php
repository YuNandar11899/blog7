<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('customer/create');
    }
    public function store(Request $request){
        $customer=new Customer([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        $customer->save();
        return redirect('/');
    }
    public function index(){
        $customers=Customer::all();
        return view('/customer/index',compact('customers'));
    }
    public function detail($id){
        $customers=Customer::find($id);
        return view('/customer/detail',compact('customers'));
    }
    public function edit($id){
        $customers=Customer::find($id);
        return  view('customer/edit',compact('customers'));
    }
    public function update(Request $request){
        $customers=[
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
        'password'=>$request->get('password')
        ];
        Customer::find($request->get('id'))->update($customers);
        return redirect('/customer');
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect(('/customer'));
    }

}
