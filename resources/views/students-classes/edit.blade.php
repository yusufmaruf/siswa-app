@extends('templates.default')

@php
    $title='Data Siswa';
    $preTitle = 'Edit data';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('studentsClass.update', $class->id)}}" class="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control  @error('name') is-invalid
                    @enderror" name="name" placeholder="Tulis Nama" value="{{old('name') ?? $class->name}}">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control  @error('slug') is-invalid
                    @enderror" name="slug" placeholder="Tulis Alamat" value="{{old('address') ?? $class->slug}}">
                    @error('slug')
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