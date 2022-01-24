@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                </ol>
            </nav>
        </div>
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-2" style=font-size:50px>
                    Frequently Asked Questions (FAQs)
                </h1>
                <hr>
                <p class="lead">
                <h4>Apakah harga produk sudah termasuk ongkos kirim?</h4>
                <ul>
                    <li>
                        <p align="justify">Belum. Ongkir akan dihitung melalui aplikasi Gojek dan Grab.</p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Maksud stok pada item apa?</h4>
                <ul>
                    <li>
                        <p align="justify">Stok dalam item menandakan bahwa adanya bahan untuk membuat dessert tersebut.</p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Apa harga hanya berupa dessert?</h4>
                <ul>
                    <li>
                        <p align="justify">Tidak. Pembeli akan mendapatkan Vla sesuai dengan besar dessert dan pisau plastik. Serta desser akan diletakkan pada wadah plastik yang rapat agar dessert tetap aman dan dibungkus lagi dengan kardus cantik yang dihias pita maupun diberi bunga serta costum kartu ucapan.</p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Menggunakan jasa pengiriman apa?</h4>
                <ul>
                    <li>
                        <p align="justify">Pudding Mom's Bee menggunakan jasa kurir GoSend Instant dan GrabExpress Instant untuk melindungi dessert dan menjaga agar rasa dessert masih segar.</p>
                    </li>
                </ul>
                </p><br>
                <p class="lead">
                <h4>Berapa lama membuat dessert yang telah dipesan?</h4> <br>
                <ul>
                    <li>
                        <p align="justify">Setelah membayar, kita akan memberikan email untuk mencantumkan tulisan yang ingin dibuat serta tema yang diinginkan. Paling lama menunggu antrian dua hingga tujuh hari.</p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Apakah bisa mengirimkan dessert keluar kota?</h4>
                <ul>
                    <li>
                        <p align="justify">Hingga saat ini, kita masih belum bisa mengirimkan dessert keluar kota. Jangkauan kita hanya Jabodetabek sejauh ini.</p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Bagaimana cara menghubungi Pudding Mom's Bee?</h4>
                <ul>
                    <li>
                        <p align="justify"> Bisa menguhubungi via :<br>
                            <strong>WhatsApp : 082113565600 (Chat Only)<br>
                                Email: cs.puddingmomsbee@gmail.com</strong>
                        </p>
                    </li>
                </ul>
                </p>
                <br>
                <p class="lead">
                <h4>Di mana toko Pudding Mom's Bee?</h4>
                <ul>
                    <li>
                        <p align="justify">Produk Pudding Mom's Bee hanya dapat dipesan melalu online. Jika ada yang ingin mengambil dessert yang sudah dipesan secara langsung bisa di ambil pada dapur Pudding Mom's Bee yang berada di Kramat jati, Jakarta Timur.
                       
                    </li>
                </ul>
                </p>
            </div>
        </main>
    </div>
</div>
@endsection