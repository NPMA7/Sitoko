<x-headlink/>
    <title>Checkout</title>

    <script src="public/js/function.js"></script>
    <link rel="stylesheet" href="public/css/user/cart/checkout.css">
</head>
<body>
@if (Route::has('login'))
<!-- user page -->
                    @auth

    <div class="navbar-belilangsung">
        <div class="icon-kembali-co">
            <a href="{{route('keranjang')}}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="title-checkout">
            Checkout
        </div>
    </div>
    <span></span>
    <div class="lokasi-penerima">
        <div class="isi-lokasi">
            <div class="tile-lokasi">
                <i class="fa-solid fa-location-dot"></i>
                Lokasi Penerima:
            </div>
            <div class="nama-telepon">
                <p id="nama-penerima">Eumul Agen Lotre</p>
                <p id="Nomor Telepon">08571267318</p>
            </div>
            <div class="alamat">
                <div class="jalan-RT-RW">
                    <p id="jalan">Jl Loreng Maung</p>
                    <p id="RT/RW">RT.12/RW.8</p>
                </div>
                <p id="Kampung">Kampung Sinyal Soang,</p>
                <p id="kota">Montoro</p>
                <p id="kabupaten">, Kab SUKUNAJI,</p> 
                <p id="provinsi">Nisa Kabo</p>
                <p id="kode-pos">, ID 33210</p>
            </div>
        </div>
    </div>
    <div class="ini-produknya">
        <div class="isinya">
            <img src="/public/img/Rekomendasi/Boxer/BoxerAM.jfif" alt="" id="gambar-produk">
            <div class="rincian-produk">
                <p id="nama-produk">Boxer Keren Bjirr</p>
                <p id="deksripsi-nya">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, eos?</p>
                <div class="harga-nya">
                    Harga:
                    <p id="harga-asli">Rp200.000</p>
                </div>
            </div>
        </div>
    </div>
    <div class="list-metode-pembayaran">
        <div class="isi-list">
            <p class="jenisnyaa">
                Jenis Metode Pembayaran
            </p>
            <div class="cod">
                <p>COD</p>
            </div>
            <div class="paypal">
                <i class="fa-brands fa-cc-paypal"></i>
                <p>PayPal</p>
            </div>
            <div class="gopay">
                <i class="fa-brands fa-cc-paypal"></i>
                <p>GoPay</p>
            </div>
            <div class="dana">
                <i class="fa-brands fa-cc-paypal"></i>
                <p>Dana</p>
            </div>
        </div>
    </div>
   
    <div class="jasa-pengiriman">
        <div class="title-jasa-pengiriman">
            Jasa Pengiriman
        </div>
            <div class="body-jasa-pengiriman">
                <input type="checkbox">
                <label for="">
                    Mode Cepat 
                </label>
                <div class="harga-ongkir">Harga:<p id="ongkir">Rp7.500</p>
            </div>
            </div>
        <div class="total-pesanan">
            <div class="body-total-pesanan">
                Total Pesanan<p id="jumlah-total-pesanan">(1)</p>
                <div class="harga-totalnya">
                    <p class="jumlah-semuanya">Rp207.500</p>
                       
                </div>
                <div class="metode-pembayaran">
                    <div class="isi-metode">
                            Metode Pembayaran:
                            <p id="COD"> Cash On Deliveri (COD)</p>
                    </div>
                </div>
                 <a href="{{route('pesanan-diproses')}}"> <div class="beli-sekarangnya">
                  Checkout
                </div></a>
            
            </div>
        </div>

    </div>
    <div></div>
<!-- guest page -->
       @else
              

<div class="guest">Anda Belum Login</div>
<style>
body {
  height: 80vh;
  width: 80vw;
}
.guest{
margin-top:100px;
  margin-left: 55%;
  width: 20em;
  color: black;
}
@media screen and (max-width: 767px){
    .guest{
margin-top:100px;
  margin-left: 44%;
  width: 20em;
  color: black;


}
}
 </style>

                    @endauth
                
            @endif

</body>
</html>