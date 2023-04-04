@extends('layouts.default')

@section('content')
    <form name="user" id="employee-form" method="post" action="{{url('store_form')}}" enctype="application/json">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Current position</label>
            <input type="text" id="position" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="workData">workData</label>
            <input type="text" id="workData" name="workData" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="JSON_data">JSON_data</label>
            <input type="text" id="JSON_data" name="JSON_data" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
