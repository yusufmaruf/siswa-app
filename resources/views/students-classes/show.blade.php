@extends('templates.default')

@php
    $title='Siswa Dalam Kelas';
    $preTitle = 'data siswa di kelas';
@endphp
@section('content')
<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Photo</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Class</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($class->students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>
                  <img src="{{asset('storage/' . $student->photo)}}" alt="" height="100px" >
                </td>
                <td>
                    {{$student->address}}
                </td>
                <td >{{$student->phone_number}}</td>
                <td>
                    {{$class->name}}
                </td>
                <td>
                  <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{route('students.destroy', $student->id )}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="hapus" class="btn btn-danger btn-sm ">
                  </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
