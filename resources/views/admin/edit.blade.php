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
                <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb -->
    <br>
    <br>
    <div class="col-md-12 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="50%" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2>{{ $barang->nama_barang }}</h2>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($barang->harga) }}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format($barang->stok) }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{ $barang->keterangan }}</td>
                                </tr>

                                <tr>
                                    <td>Gambar</td>
                                    <td>:</td>
                                    <td>
                                        {{ $barang->gambar }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2><i class="fa fa-pencil-alt"></i> Edit Produk</h2>
                        <form method="POST" action="{{ url('edit') }}/{{ $barang->id }}">
                            @csrf
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-md-6">
                                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ $barang->nama_barang }}" required autocomplete="nama_barang" autofocus>

                                                @error('nama_barang')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-md-6">
                                                <input id="harga" type="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" required autocomplete="harga">

                                                @error('harga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-md-6">
                                                <input id="stok" type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $barang->stok }}" required autocomplete="stok" autofocus>

                                                @error('stok')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-md-6">
                                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" required="">{{ $barang->keterangan }}</textarea>

                                                @error('keterangan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Gambar</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-md-6">
                                                <textarea name="gambar" class="form-control @error('gambar') is-invalid @enderror" required="">{{ $barang->gambar }}</textarea>

                                                @error('gambar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-outline-secondary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection