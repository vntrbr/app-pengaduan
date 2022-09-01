
@extends('layouts.master')


@section('content')
                    <div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>Kategori</h3>
                                    <p class="text-subtitle text-muted">Data Kategori Untuk Masyarakat </p>
                                </div>
                                <div class="col-12 col-md-6 order-md-2 order-first">
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Kategori</li>
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
        <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary float-right">Tambah Kategori</a>
        </h6>
        </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th style="text-align: center;">ID kategori</th>
                    <th style="text-align: center;">Keterangan kategori</th>
                    <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @if(count($kategori)>0)
                    @foreach($kategori as $key=>$kategori)
                    <th style="text-align: center;">{{ $kategori->id_kategori }}</th>
                    <td style="text-align: center;">{{ $kategori->ket_kategori }}</td>
                    <td style="text-align: center;">
                    <form action="{{ route('kategori.destroy', [$kategori->id_kategori]) }}" method='POST'>
                            @csrf
                            {{method_field('DELETE')}}
                    <a href="{{ route('kategori.edit', [$kategori->id_kategori]) }}" class="btn btn-outline-success">Edit</a>
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
