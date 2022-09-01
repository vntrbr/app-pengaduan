@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Respon Aspirasi Masyarkat</div>
                    <div class="card-body">
                        <form action="{{ route('aspirasi.update', [$aspirasi->id_aspirasi]) }}" method="post">
                        @csrf
                        {{method_field('PUT')}}

                        <div class="form-group">
                         
                        <div class="form-group mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror" value="{{$aspirasi->status}}">
                                <option value="">Silahkan Pilih</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Feedback</label>
                            <input type="text" name="feedback" class="form-control"
                                placeholder="Silahkan Masukkan Feedback" value="{{$aspirasi->feedback}}">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if(session('sukses'))
      <div class="alert alert-success" role="alert">
        Data berhasil diinput
      </div>
  @endif
@endsection
