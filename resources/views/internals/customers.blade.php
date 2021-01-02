@extends('layouts.app')
@section('content')
    <h1>Customers</h1>
    <form action="customers" method="POST" class="mb-3">
        <div class="input-group">
            <input type="text" name="name" placeholder="add name">
        </div>
        <div>
            {{ $errors->first('name') }}
        </div>
        <button type="submit" class="btn btn-success mt-2">Add customer</button>
        @csrf
    </form>
    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection
