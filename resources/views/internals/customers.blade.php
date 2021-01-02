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
                <button type="submit" class="btn btn-success mt-2">Add customer</button>
                @csrf
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($customers as $customer)
                    <li>name:{{ $customer->name }} email:{{ $customer->email }}</li>
                @endforeach
            </ul>
        </div>
    </div>



@endsection
