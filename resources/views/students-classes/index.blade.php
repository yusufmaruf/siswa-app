@extends('templates.default')

@php
    $title='Data Siswa';
    $preTitle = 'Semua data';
@endphp

@push('page-action')
  <a href="{{route('studentsClass.create')}}" class="btn btn-primary">Tambah Data</a>
    
@endpush

@section('content')
<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Slug</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
            <tr>
                <td>
                  <a href="{{route('studentsClass.show', $class)}}">
                    {{$class->name}}</td>
                  </a>
                <td>
                    {{$class->slug}}
                </td>
                <td>
                  <a href="{{route('studentsClass.edit',$class->id)}}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{route('studentsClass.destroy', $class->id )}}" method="post">
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
