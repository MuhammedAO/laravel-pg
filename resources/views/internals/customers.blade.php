@extends('layouts.app')
@section('title', 'Customer db')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
            <form action="customers" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="add name" value="{{ old('name') }}" class="form-control">
                    {{ $errors->first('name') }}
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="add email" value="{{ old('email') }}" class="form-control">
                    {{ $errors->first('email') }}
                </div>
                <div class="form-group">
                    <label for="active">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">active</option>
                        <option value="0">inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-2">Add customer</button>
                @csrf
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name }} <span class="text-muted">({{ $activeCustomer->company->name }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h3>inActive Customers</h3>
            <ul>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>{{ $inactiveCustomer->name }} <span class="text-muted">({{ $inactiveCustomer->company->name }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @foreach ($companies as $company)
                <h4>{{ $company->name }}</h4>
                <h4>{{ $company->phone }}</h4>
                <ul>
                    @foreach ($company->customers as $customer)
                        <li>{{ $customer->name }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
@endsection
