<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller{

  public function index(){
    $customers = Customer::all();

    return view('customers.index', compact('customers'));
  }

  public function create()
  {
    $companies = Company::all();
    return view('customers.create', compact('companies'));
  }

  public function store()
  {

    $data = request()->validate([
      'name' => 'required|min:3',
      'email' => 'required|email',
      'active' => 'required',
      'company_id' => 'required',
    ]);

    //mass assignment
    Customer::create($data);

    return redirect('customers');
  }

  //Route model binding for a show view
  public function show(Customer $customer) {
    // $customer = Customer::where('id', $customer)->firstOrFail();
    return view('customers.show', compact('customer'));
  }
}
