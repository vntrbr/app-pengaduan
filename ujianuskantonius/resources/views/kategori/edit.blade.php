@extends('layouts.master')


@section('content')
<div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Ubah Kategori</h3>
                                <p class="text-subtitle text-muted">Mengubah Data Kategori </p>
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
                                <form class="form form-horizontal" action="{{ route('kategori.update',[$kategori->id_kategori]) }}" method="post">
                                        @csrf
                                        {{method_field('PUT')}}
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nama Kategori</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="first-name" class="form-control"  value="{{ $kategori->ket_kategori }}"
                                                        name="ket_kategori" placeholder="Keterangan Kategori">
                                                </div>
                                               
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 d-flex justify-content">
                                <a href="{{ route('kategori.index') }}">
                                    <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Home</button>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </section>
                  
                </div>

                @endsection