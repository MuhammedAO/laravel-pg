<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function list()
  {
    $customers = Customer::all();

    // dd($customers);
    // $customers = [
    //   'Jack ma',
    //   'Aliko',
    //   'Adenuga',
    // ];
    return view('internals.customers', ['customers' => $customers]);
  }
}
