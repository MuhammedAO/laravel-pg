<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

  public function index()
  {
    $customers = Customer::all();

    return view('customers.index', compact('customers'));
  }

  public function create(Customer $customer)
  {
    $companies = Company::all();
    return view('customers.create', compact('companies', 'customer'));
  }

  public function store()
  {
    //mass assignment
    Customer::create($this->validateRequest());

    return redirect('customers');
  }

  //Route model binding for a show view
  public function show(Customer $customer)
  {
    // $customer = Customer::where('id', $customer)->firstOrFail();
    return view('customers.show', compact('customer'));
  }

  public function edit(Customer $customer)
  {
    $companies = Company::all();

    return view('customers.edit', compact('customer', 'companies'));
  }

  public function update(Customer $customer)
  {
    $customer->update($this->validateRequest());

    return redirect('customers/' . $customer->id);
  }

  public function destroy(Customer $customer)
  {
    $customer->delete();
    return redirect('customers');
  }

  public function validateRequest()
  {
    return request()->validate([
      'name' => 'required|min:3',
      'email' => 'required|email',
      'active' => 'required',
      'company_id' => 'required',
    ]);
  }
}
