@extends('layouts.master')

@section('content')
<div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>Respon Aspirasi Masyarakat</h3>
                                    <p class="text-subtitle text-muted">Tanggapan Admin  </p>
                                </div>
                                <div class="col-12 col-md-6 order-md-2 order-first">
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tanggapan</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-12">
                                <div class="card shadow mb-4">
    <div class="card-header py-3">
   
        <a href="{{ route('aspirasi.create') }}" class="btn btn-outline-primary float-right">Tambah Data</a>
   
        </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                    <th style="text-align: center;">NIK</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Lokasi</th>
                    <th style="text-align: center;">Keterangan</th>
                    <th style="text-align: center;">Feedback</th>
                    <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @if(count($aspirasi)>0)
                    @foreach($aspirasi as $key=>$aspirasi)
                    <th style="text-align: center;">{{ $aspirasi->nik }}</th>
                    <td style="text-align: center;">{{ $aspirasi->status }}</td>
                    <td style="text-align: center;">{{ $aspirasi->inpspirasi->lokasi }}</td>
                    <td style="text-align: center;">{{ $aspirasi->inpspirasi->ket }}</td>
                    <td style="text-align: center;">{{ $aspirasi->feedback }}</td>
                    <td style="text-align: center;">
                    <form action="{{ route('aspirasi.destroy', [$aspirasi->id_aspirasi]) }}" method='POST'>
                            @csrf
                            {{method_field('DELETE')}}
                    <a href="{{ route('aspirasi.edit', [$aspirasi->id_aspirasi]) }}" class="btn btn-outline-success">Edit</a>
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                </table>
                </div>
            </div>
        </div>
        
@endsection
