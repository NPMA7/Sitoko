<x-headlink/>
    <title>Keranjang</title>
    <link rel="stylesheet" href="public/css/user/cart/keranjang.css" />
   
    <script src="public/js/function.js"></script>
  </head>
  @if (Route::has('login'))
<!-- user page -->
                    @auth

  <body>
    <div class="navbar">
      <div class="navbar-body">
        <div class="title-logo">
           <div class="icon-kembali">
            <a href="{{route('beranda')}}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
          <p class="logo">Keranjang</p>
        </div>
        <div class="search-box">
            <div class="search-icon" id="search">
              <i class="fa-solid fa-magnifying-glass f-l" style="color: #ffffff"></i>
            </div>
            <div class="search-input">
              <input type="text" class="input" placeholder="Search" />
            </div>
          </div>
      </div>
    </div>
    <div class="klasifikasi">
        <div class="title-nama-toko">
            <input type="checkbox" checked="checked">
            <label for="" class="nama-toko">Nama Toko</label>
        </div>
        <div class="harga-satuan">
            <p>Harga Satuan</p>
        </div>
        <div class="kuantitas">
            <p>Kuantitas</p>
        </div>
    </div>

        <!-- Nama Produk & Gambar -->

    <div class="pesanan-produk" >
        <div class="body-pesanan-produk">
            <div class="img-produk-chekbock">
                <input type="checkbox" name="" id="" checked="checked">
                <img src="/public/img/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="ini-produknya" width="150px" height="150px">
                <div class="deskripsi-nama">
                    <p class="nama" style="font-weight: bold;">Boxer Artistik Bjirr</p>
                    <div class="variasi"><p class="p">Variasi :</p><p class="simbol"> ᐯ</p>
                      <p class="type"><b>Hijau</b></p>
                      </div>
                    
                </div>
            </div>
            <!-- Nama Produk & Gambar -->
            <!-- Harga Satuan -->
                <div class="satuan-harga">
                    <p class="harganya"><h3>Rp200.000</h3></p>
                </div> 
                
                <div class="kuantias">
                    <div class="kuantitasnya">

                        <div>
                          <button class="minus">-</button>
                            
                        </div>
                        <div class="nomorr">
                            <p>1</p>
                        </div>
                        <div>
                          <button class="plus">+</button>
                            
                        </div>
                    </div>
                </div>
            <!-- Harga Satuan -->
        </div>
      </div>
    </div>
    <div class="total-produk">
        <div class="title-total-produk">
            <input type="checkbox" checked="checked">
            <label for="" class="plihan-semua">Pilih Semua (1)</p>
            </label>
        </div>
        <div class="jumlah-produk">
            <p>Total (
                <p id="jumlah-produknya"> 1 Produk</p>
             ) :
            </p>
            <div id="harganya-semua">
                <p>Rp200.000</p>
            </div>
        </div>
        <div class="beli-sekarang">
            <div class="buy-now">
                <a href="{{route('checkout')}}">Beli Sekarang</a>
            </div>
        </div>
    </div>
    
    <!-- Rekomendasi -->
    
    <!-- <div class="rekomendasi">
        <p class="ttl">Rekomendasi</p>
        <div class="line"></div>
      </div>
      <div class="sale">
          <div class="barang">
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
              <div class="produk">
                  <img src="/asset/Rekomendasi/Boxer/BoxerAM.jfif" alt="" class="img-sale">
                  <div class="deksripsi">
                    <p>Lorem /ipsum /dolor /sit /amet.</p>
                  </div>
                  <div class="harga">
                    <p>Rp 200.000</p>
                  </div>
              </div>
  
            </div>
        </div> -->
    <!-- Rekomendasi -->
</body>
       @else
  
  <body>
    <div class="navbar">
      <div class="navbar-body">
        <div class="title-logo">
           <div class="icon-kembali">
            <a href="{{route('beranda')}}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
          <p class="logo">Keranjang</p>
        </div>
        <div class="search-box">
            <div class="search-icon" id="search">
              <i class="fa-solid fa-magnifying-glass f-l" style="color: #ffffff"></i>
            </div>
            <div class="search-input">
              <input type="text" class="input" placeholder="Search" />
            </div>
          </div>
      </div>
    </div>
    <div class="klasifikasi">
        <div class="title-nama-toko">
            <input type="checkbox" checked="checked">
            <label for="" class="nama-toko">Nama Toko</label>
        </div>
        <div class="harga-satuan">
            <p>Harga Satuan</p>
        </div>
        <div class="kuantitas">
            <p>Kuantitas</p>
        </div>
    </div>

<div class="guest">Anda Belum Login</div>
<style>
.guest{
margin-top:100px;
  margin-left: 45%;
  width: 20em;
  color: black;
}
@media screen and (max-width: 767px){
    .guest{
margin-top:100px;
  margin-left: 37%;
  width: 20em;
  color: black;


}
}
 </style>
        </div>
      </div>
    </div>
    <div class="total-produk">
        <div class="title-total-produk">
            <input type="checkbox" checked="checked">
            <label for="" class="plihan-semua">Pilih Semua (1)</p>
            </label>
        </div>
        <div class="jumlah-produk">
            <p>Total (
                <p id="jumlah-produknya"> 1 Produk</p>
             ) :
            </p>
            <div id="harganya-semua">
                <p>Rp0</p>
            </div>
        </div>
        <div class="beli-sekarang">
            <div class="buy-now">
                <a href="{{route('keranjang')}}">Beli Sekarang</a>
            </div>
        </div>
    </div>
    
                    @endauth
                
            @endif
</body>
</html>