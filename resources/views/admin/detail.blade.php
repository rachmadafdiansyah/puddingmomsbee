@extends('layouts.master')
@section('content')
<div class="container">
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
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb -->
        <br>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mt-2" style=font-size:50px><i class="fas fa-file-invoice"></i> Detail Pesanan</h1>
                    <hr>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Produk Dipesan</h3>
                        <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Pemesan</th>
                                    <th>Nama Barang</th>
                                    <th>id Pesanan</th>
                                    <th>Status</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ url('uploads') }}/{{ $pesanan_detail->barang->gambar }}" width="100" alt="...">
                                    </td>
                                    <td>{{$pesanan->user->name}}</td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{$pesanan->id}}</td>
                                    <td>
                                        @if($pesanan->status == 1)
                                        Menunggu Pembayaran
                                        @elseif($pesanan->status == 2)
                                        Pesanan Sedang dikemas
                                        @elseif($pesanan->status == 3)
                                        Pesanan Sedang dikirim
                                        @else
                                        Transaksi Selesai
                                        @endif
                                    </td>
                                    <td>{{ $pesanan_detail->jumlah }}</td>
                                    <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                                </tr>
                                @endforeach

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>

                                </tr>

                            </tbody>
                        </table>
                        <br>
                        <p>No HP : {{$pesanan->user->nohp}} <br>
                            <strong>Alamat Pengiriman :</strong> <br> {{ $pesanan->user->alamat }}
                        </p>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection