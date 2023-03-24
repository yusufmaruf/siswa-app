@extends('templates.default')

@php
    $title='Data Siswa';
    $preTitle = 'tambah  data';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('studentsClass.store')}}" class="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Kelas</label>
                    <input type="text"  name="name" class="form-control @error('name') is-invalid
                    @enderror" placeholder="Tulis Nama" value="{{old('name')}}">
                    @error('name')
                        <span class="invalid-feedback">{{$message}}</span>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control @error('address') is-invalid
                    @enderror" name="slug" placeholder="Tulis Alamat" value="{{old('slug')}}">
                    @error('address')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
               
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
            
        </div>
    </div>

@endsection