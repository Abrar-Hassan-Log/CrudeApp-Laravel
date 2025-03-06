@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <h2>Student Update Records</h2>
    <form action="{{route('student.update',$stud->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" value="{{$stud->name}}" name="name" placeholder="Enter your username">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name ="email" value="{{$stud->email}}" name="email" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" value = "{{$stud->address}}" name = "address" placeholder="Enter your address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
