@extends('layouts.master')

@section('content')
<div class="row">
    <!-- Tombol Kembali-->
    <div class="col-md-12">
        <a href="{{ url('admin') }}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <!-- Tombol Kembali-->
    <!-- Breadcrumb -->
    <div class="col-md-12 mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb -->
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class='mt-2'>Tambah Produk</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>

                                @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">Nama File Gambar</label>

                            <div class="col-md-6">
                                <input id="gambar" type="gambar" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar') }}" required autocomplete="gambar">

                                @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>

                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">Stok</label>

                            <div class="col-md-6">
                                <input id="stok" type="stok" class="form-control @error('gambar') is-invalid @enderror" name="stok" value="{{ old('stok') }}" required autocomplete="stok">

                                @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                                <input id="keterangan" type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan">

                                @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Produk
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <br>
        </br>
        <hr class="featurette-divider mb-4 mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Gambar</th>
                                <th scope="col">Nama File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{url ('uploads/a1.jpg')}}" width="100" alt="..."></td>
                                <td>Pudding Dessert Box</td>
                                <td>a1.jpg</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="{{url ('uploads/a2.jpg')}}" width="100" alt="..."></td>
                                <td>Pudding Cup</td>
                                <td>a2.jpg</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><img src="{{url ('uploads/a3.jpg')}}" width="100" alt="..."></td>
                                <td>Pudding Costum</td>
                                <td>a3.jpg</td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection