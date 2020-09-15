@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Nilai Akademik </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Nilai Akademik </h1>
        </header>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>Proses Gagal!!!</li>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Pilih Semester</h4>
                    </div>
                        <div class="card-body">
                            <form action="{{route('nilai.siswa.semester')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Semester</label>
                                    <input type="number" name="semester" class="form-control" min="1"
                                        value="{{old('semester', $semester ?? ' ')}}" placeholder="masukan angka" required>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Proses" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Tambah Nilai Akademik Semester {{$semester ?? ''}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('nilai-akademik.store')}}" method="POST">
                            @csrf

                                @include('admin.nilai.form')

                        <form>
                    <div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
