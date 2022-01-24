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
                <li class="breadcrumb-item active" aria-current="page">Daftar Pesanan</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb -->
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3><i class="fa fa-history"></i> Daftar Pesanan</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>id Pesanan</th>
                            <th>Status</th>
                            <th>Jumlah Harga</th>
                            <th>Aksi</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->tanggal }}</td>
                            <td>{{$pesanan->id}}</td>
                            <td>
                                @if($pesanan->status == 1)
                                Menunggu Pembayaran
                                @elseif($pesanan->status == 2)
                                Pesanan Sedang Diproses
                                @elseif($pesanan->status == 3)
                                Pesanan Sedang Dikirim
                                @else
                                Transaksi Selesai
                                @endif
                            </td>
                            <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                            <td>
                                <a href="{{ url('pesanan') }}/{{ $pesanan->id }}" class="btn btn-outline-secondary"><i class="fa fa-info"></i> Detail</a>
                            </td>
                            <td>
                                <a href="{{ url('editpesanan') }}/{{ $pesanan->id }}" class="btn btn-outline-danger"><i class="fa fa-info"></i> Edit Status</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection