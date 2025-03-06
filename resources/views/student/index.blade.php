@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <h2>Student Information</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <td>{{$std->id}}</td>
                <td>{{$std->name}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->address}}</td>
                <td>
                   <a href="{{ route('student.edit', $std->id) }}" class="btn btn-primary btn-sm" style="display: inline-block; margin-right: 5px;">Edit</a>
                     <form action="{{ route('student.destroy', $std->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection