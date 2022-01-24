@extends('layouts.master')
@section('content')
<div class="row">
    <!-- Tombol Kembali-->
    <div class="col-md-12">
        <a href="{{ url('pesanan') }}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <!-- Tombol Kembali-->
    <!-- Breadcrumb -->
    <div class="col-md-12 mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('pesanan') }}">Daftar Pesanan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Status Pesanan</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb -->
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="mt-2" style=font-size:50px><i class="fas fa-file-invoice"></i> Status Pesanan</h1>
                    <hr>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>id Pesanan</td>
                            <td width="10">:</td>
                            <td>{{ $pesanan->id }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pesan</td>
                            <td>:</td>
                            <td>{{ $pesanan->tanggal }}</td>
                        </tr>
                        <tr>
                            <td>Status
                            <td>:</td>
                            <td>@if($pesanan->status == 1)
                                Menunggu Pembayaran
                                @elseif($pesanan->status == 2)
                                Pesanan Sedang Diproses
                                @elseif($pesanan->status == 3)
                                Pesanan Sedang Dikirim
                                @else
                                Transaksi Selesai
                                @endif</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12 mt-2">
                    <div class="card-body">
                        <h4><i class="fa fa-pencil-alt"></i> Edit Status</h4>
                        <form method="POST" action="{{ url('editpesanan') }}/{{ $pesanan->id }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                                <div class="col-md-6">
                                    <input id="status" type="text" pattern="[1-4]" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $pesanan->status }}" required autocomplete="status" autofocus>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row mb-2 mt-2">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-outline-secondary">
                                            Save
                                        </button> <a>Masukkan angka 1 - 4</a>
                                    </div>
                                </div>
                                <p>
                                <ol><strong>Keterangan :</strong>
                                    <li>Menunggu Pembayaran</li>
                                    <li>Sedang Diproses</li>
                                    <li>Sedang Dikirim</li>
                                    <li>Transaksi Selesai</li>
                                </ol>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection