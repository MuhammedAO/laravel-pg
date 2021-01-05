@extends('layouts.app')
@section('title', 'Edit Details for ' . $customer->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $customer->name }}</h1>
            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('PATCH')
                @include('customers.form')
                <button type="submit" class="btn btn-success mt-2">Save Customer</button>
            </form>
        </div>
    </div>

@endsection
