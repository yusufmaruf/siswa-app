@extends('templates.default')

@php
    $title='Data Siswa';
    $preTitle = 'tambah  data';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('students.store')}}" class="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text"  name="name" class="form-control @error('name') is-invalid
                    @enderror" placeholder="Tulis Nama" value="{{old('name')}}">
                    @error('name')
                        <span class="invalid-feedback">{{$message}}</span>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('address') is-invalid
                    @enderror" name="address" placeholder="Tulis Alamat" value="{{old('address')}}">
                    @error('address')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Telephone</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid
                    @enderror" name="phone_number" placeholder="Tulis Nomor Telephone"  value="{{old('phone_number')}}">
                    @error('phone_number')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div> 
                <div class="mb-3">
                    <label class="form-label">kelas</label>
                    <select name="student_class_id" id="" class="form-control">
                        @foreach ($classes as $class )
                          <option value="{{$class->id}}">{{"$class->name"}}</option>
                            
                        @endforeach
                    </select>
                    @error('"student_class_id')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Siswa</label>
                    <input type="file"  name="photo" class="form-control @error('photo') is-invalid
                    @enderror" placeholder="Masukan Foto" value="{{old('photo')}}">
                    @error('photo')
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