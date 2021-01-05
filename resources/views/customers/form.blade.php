<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="add name" value="{{ old('name') ?? $customer->name }}"
        class="form-control">
    {{ $errors->first('name') }}
</div>
<div class="form-group mt-2">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="add email" value="{{ old('email') ?? $customer->email }}"
        class="form-control">
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
@csrf
