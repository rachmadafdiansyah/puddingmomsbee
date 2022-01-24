@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 mb-3">
        <img src="{{ url('images/logoadmin1.png') }}" class="rounded mx-auto d-block" width="200" alt="">
    </div>
    <hr class="featurette-divider">
    @foreach($barangs as $barang)
    <div class="col-md-4 mb-4">
        <div class="card">
            <a href="{{ url('edit') }}/{{ $barang->id }}"><img class="card-img-top" src="{{url('uploads')}}/{{$barang->gambar}}" alt="Card image cap"></a>
            <div class="card-body">
                <center>
                    <a href="{{ url('edit') }}/{{ $barang->id }}" style="text-decoration: none;">
                        <h3 class="card-title" style="color:black;">{{$barang->nama_barang}}</h3>
                    </a>
                </center>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }}
                    <hr>

                </p>
                <a href="{{ url('edit') }}/{{ $barang->id }}" class="btn btn-outline-secondary"> <i class="fa fa-pencil-alt"></i> Edit </a>
                <br>
                </br>
                <form action="{{ url('edit') }}/{{ $barang->id }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i> Delete</button>
                </form>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection