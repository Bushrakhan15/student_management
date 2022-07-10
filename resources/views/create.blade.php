
@extends('master')

@section('content')

    <h2>Create New Students</h2>
    <form class="form-horizontal" action="{{route('store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label for="registration_id">Registration Number:</label>
            <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="registration Num">
        </div>

        <div class="form-group">
            <label for="department_name">Department:</label>
            <input type="text" class="form-control" name="department_name" id="department_name" placeholder="department_name">
        </div>

        <div class="form-group">
            <label for="info">Info:</label>
            <textarea class="form-control" name="info" id="info" rows="" placeholder=""></textarea>
        </div>

        <button type="submit" class="btn btn-default">Register Student</button>
    </form>


@endsection



