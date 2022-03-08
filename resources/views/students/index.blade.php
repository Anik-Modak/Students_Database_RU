@extends('layout', ['title'=> 'Home'])

@section('page-content')

    <div class="row">
        <div class="col-1">
            <p class="text-start"><a href="{{route('students.index')}}" class="btn btn-primary">Home</a></p>
        </div>

        <div class="col-2">
            <p class="text-left"><a href="{{route('students.create')}}" class="btn btn-primary">New Student</a></p>
        </div>

        <div class="col-9">
            <form action="{{ route('students.index') }}" method="GET" >
                <div class="form-row">
                    <div class="col-10">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search"
                               value="{{ request('search') }}">
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Search</button>

                    </div>
                </div>
            </form>
        </div>

    </div>

    <table class="table table-striped table-bordered">
        <th>Student ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th colspan="3" class="text-center">Action</th>
        @foreach($students as $student)
            <tr>
                <td>{{$student->s_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->dept}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a href="{{route('students.show',$student->id)}}">View</a>
                </td>
                <td>
                    <a href="{{route('students.edit',$student->id)}}">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{route('students.destroy',$student)}}" onsubmit="return confirm('Sure you want to delete this?')">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

    {{ $students->withQueryString()->links() }}

@endsection
