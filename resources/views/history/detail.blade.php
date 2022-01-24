@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BCA Nomer Rekening : 436-01032-56</strong> atas nama<strong> Rachmad Afdiansyah</strong> dengan nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
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
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} item</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif
<main class="flex-shrink-0">
            <div class="container">

                <h1 class="mt-2" style=font-size:30px><i class="far fa-check-circle"></i> Konfirmasi Pembayaran</h1>
                <hr>
                <p class="lead">
                <h4>Konfirmasi Pembayaran Via Email</h4> <br>
                Kirim email konfirmasi pembayaran, tema dessert, ucapan pada dessert beserta bukti pembayaran ke email : <br>
                <strong>email : cs.puddingmomsbee@gmail.com</strong>
                <br>
                </br>
                <br>
                </br>
                <h4>Konfirmasi Pembayaran Via WhatsApp</h4> <br>
                Kirim pesan konfirmasi pembayaran beserta bukti pembayaran ke nomor WhatsApp :<br>
                <strong>WA : 082113565600 (Chat Only)</strong><br>
                atau bisa klik link berikut : <br>
                <br>
                <a href="https://api.whatsapp.com/send?phone=6282113565600&text=Saya%20ingin%20konfirmasi%20pesanan%20berikut:%0ANama%20Sesuai%20Pesanan%20:%0ATanggal%20Transfer%20:%0ATransfer%20Dengan%20Atas%20Nama%20:%0AJumlah%20Nominal%20Transfer%20:%0ATema%20Dessert%20:%0AUcapan%20Pada%20Dessert%20:%0A*bisa%20upload%20bukti%20transfer." style="text-decoration: none;"><img src="{{url('images/wa.png')}}" width="200" alt="">
                </a></p>
            </div>
        </main>
    </div>
</div>
</main>
            </div>
        </div>
            </div>
@endsection