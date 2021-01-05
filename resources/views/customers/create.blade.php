@extends('layouts.app')
@section('title', 'Add New Customer')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
            <form action="/customers" method="POST">
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

@endsection
