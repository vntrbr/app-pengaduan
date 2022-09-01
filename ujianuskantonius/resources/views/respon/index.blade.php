@extends('layouts.master')

@section('content')

<div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Lihat Aspirasi</h3>
                                <p class="text-subtitle text-muted">Lihat aspirasi yang diberikan masyarakat</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Aspirasi</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-12">
                                <div class="card shadow mb-4">
    <div class="card-header py-3">
                        <div class="row match-height">
                  
                                <h4 class="card-title">Tambah Data</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
        </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th style="text-align: center;">ID LAPORAN</th>
                    <th style="text-align: center;">NIK</th>
                    <th style="text-align: center;">ID KATEGORI</th>
                    <th style="text-align: center;">Lokasi</th>
                    <th style="text-align: center;">Keterangan</th>
                    <th style="text-align: center;">Tanggap</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @if(count($inputaspirasi)>0)
                    @foreach($inputaspirasi as $key=>$inputaspirasi)
                    <th style="text-align: center;">{{ $inputaspirasi->id_pelaporan }}</th>
                    <th style="text-align: center;">{{ $inputaspirasi->nik }}</th>
                    <td style="text-align: center;">{{ $inputaspirasi->kategori->ket_kategori }}</td>
                    <td style="text-align: center;">{{ $inputaspirasi->lokasi }}</td>
                    <td style="text-align: center;">{{ $inputaspirasi->ket }}</td>
          
                    <td style="text-align: center;"> 
                    <form action="{{ route('input.destroy', [$inputaspirasi->id_pelaporan]) }}" method='POST'>
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="{{ route('aspirasi.create')}}" class="btn btn-outline-success">Tanggap</a>
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
