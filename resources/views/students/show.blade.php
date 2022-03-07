@extends('layout',['title'=>'Show'])

@section('page-content')

    <table class="table table-striped">
        <tr>
            <th>Student ID</th>
            <td>{{$student->s_id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$student->name}}</td>
        </tr>
        <tr>
            <th>Department</th>
            <td>{{$student->dept}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$student->address}}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{$student->phone}}</td>
        </tr>
    </table>

    <p class="text-start"><a href="{{route('students.index')}}" class="btn btn-primary">Back</a></p>
@endsection
