@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('analyst.store')}}">
                @csrf
                <div class="form-group">
                    <label for="Application Name">Name</label>
                    <input type="text" name="app_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Contract Info">Contact Info</label>
                    <input type="text" name="contract_info" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
