@extends('layouts.master')


@section('content')
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Buat Tanggapan</h3>
                            <p class="text-subtitle text-muted">Buat Tanggapan Untuk Aspirasi Masyarakat</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tanggapan</li>
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

<form class="form form-horizontal" action="{{ route('aspirasi.store') }}" method="post" autocomplete="off"z>
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Id Kategori</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                   
                                            <select name="id_kategori" class="form-select">
                        @foreach (App\Models\Kategori::all() as $data)
                        <option value="{{ $data->id_kategori}}">{{$data->ket_kategori}}</option>
                        @endforeach

                    </select>
					<span></span>
				</div>
                <div class="col-md-4">
                                                    <label>NIK</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                   
                                            <select name="nik" class="form-select">
                        @foreach (App\Models\Penduduk::all() as $data)
                        <option value="{{ $data->nik}}">{{$data->nik}}</option>
                        @endforeach

                    </select>
					<span></span>
</div>
                    <div class="col-md-4">
                                                    <label>Id Laporan</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                   
                                            <select name="id_pelaporan" class="form-select">
                        @foreach (App\Models\InputAspirasi::all() as $data)
                        <option value="{{ $data->id_pelaporan}}">{{$data->id_pelaporan}}</option>
                        @endforeach

                    </select>
				</div>
                <div class="col-md-4">
                                                    <label>Status</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                <select class ="form-select" name="status">
  <option value="menunggu">Menunggu</option>
  <option value="proses">Proses</option>
  <option value="selesai">Selesai</option>
</select>
                                             
				
				</div>
                <div class="col-md-4">
                                                    <label>Feedback</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="first-name" class="form-control"
                                                        name="feedback" required placeholder="Feedback">
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
        =


                                        <div class="card-content">
                                            <div class="card-body">

                                                <!-- Table with outer spacing -->
                                                <div class="table-responsive">
                                                    <table class="table table-lg">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>NIK</th>
                                                                <th>ID LAPORAN  </th>
                                                                <th>ID KATEGORI</th>
                                                                <th>Status</th>
                                                                <th>Feedback</th>
                                                               
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @php 
                                    $i=1;
                                    @endphp
                                
                                                            @foreach ($aspirasi as $aspirasi)
                                                            


                                                            <tr>
                                                                <td class="text-bold-500">{{ $i }}</td>
                                                                <td>{{ $aspirasi->penduduk->nik }}</td>
                                                                
                                                                <td>{{ $aspirasi->inpspirasi->id_pelaporan }}</td>
                                                                <td>{{ $aspirasi->kategori->ket_kategori }}</td>
                                                                <td>{{ $aspirasi->status}}</td>
                                                                <td>{{ $aspirasi->feedback }}</td>
                                                                <td>
    
                                                                 
                                                                
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @php
                                    $i++;
                                    @endphp
                                    @endforeach    
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <!-- // Basic Horizontal form layout section end -->


                        <!-- // Basic Vertical form layout section end -->


                        <!-- // Basic multiple Column Form section start -->

                        <!-- // Basic multiple Column Form section end -->
                    </div>

                    <footer>
                        <div class="footer clearfix mb-0 text-muted">
                          
                        </div>
                    </footer>
                </div>
            </div>
            <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/main.js"></script>
        </body>


                @endsection