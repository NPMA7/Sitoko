<x-headlink/>
    <title>Order</title>
    <link rel="stylesheet" href="public/css/user/pesanan/pesanan.css">

    <script src="public/js/pesanan.js"></script>

</head>
<body>
    <!-- NAVBAR- START -->

<x-topnavbar/>
    <!-- NAVBAR- END -->
    
      <!-- Profile -->
      <div class="profile">
        <div class="isi-profile">
            <!-- akun -->
            <div class="akun">
                <div class="foto-pp">
                    <img src="https://i.ibb.co/MpLZ6j4/IMG-20231010-WA0013.jpg" alt="" width="90px" height="90px" class="pp">
                </div>
                <div class="pp-akun">
                    <div class="username">
                        <p>Eumul Agen Lotre</p>
                    </div>
                    <div class="ubah-profile">
                        <a href="#" class="ubah">
                            <p>Lotre Berhadiah Naga</p>
                        </a>
                    </div>
                    <!-- <div class="rules">
                        <div class="rls">
                            <p class="p">
                                Start Seeling
                            </p>
                             </div>
    
                        <div class="rls"><p class="p">
                            Jual Perasaan  
                        </p></div>  -->
                    </div>
                </div>
                
            </div>

            <!-- Akun -->
            <div class="setting">
                <div class="my-akun">
                    <a href="#" class="account"><i class="fa-solid fa-user"></i><p>Akun Saya</p></a>
                </div>
                <div class="pesanan-saya">
                    <a href="#" class="pesanan"><i class="fa-solid fa-clipboard"></i><p>Pesanan Saya</p></a>
                </div>
                <div class="nontifikasi">
                    <a href="#" class="nontifikasi"><i class="fa-solid fa-bell"></i><p>Nontifikasi</p></a>
                </div>
            </div>
        </div>
      </div>
      <!-- Profile -->

      <!-- Body-Pesanan -->

      <!-- account setting for <900px -->


      <!-- Body-Pesanan -->
      <div id="semua">
        <div class="body-title">
          <div class="title">
              <div class="semua">
                  <a onclick="semua()" class="all">
                    <div class="list">    
                        <i class="fa-solid fa-list"  ;></i>
                    </div>
                      <p>Semua</p>
                  </a>
              </div>
              <div class="belum-dibayar">
                  <a onclick="topay()" class="to-pay">
                      <div class="pay">
                          <div class="dollar">
                              <i class="fa-solid fa-money-check-dollar  "style="margin-left: 5px;" ></i>
                          </div>
                          <p>Pay</p>
                      </div>
                  </a>
              </div>
              <div class="dikemas">
                  <a onclick="dikemas()" class="dibungkus">
                      <div class="box">
                          <div class="kardus">    
                              <i class="fa-solid fa-box"  style="margin-left: 1.6em;"></i>
                          </div>
                          <p>Dikemas</p>
                      </div>
                  </a>
              </div>
              <div class="dikirim">
                  <a onclick="dikirim()" class="to-send">
                      <div class="truck">
                          <div class="mobil">
                              <i class="fa-solid fa-truck-fast "></i>
                          </div>
                          <p>Dikirim</p>
                      </div>
                  </a>
              </div>
              <div class="selesai">
                  <a onclick="selesai()"class="end">
                      <div class="box-open">
                          <div class="kardus-buka">
                              <i class="fa-solid fa-box-open "></i>
                          </div>
                          <p>Selesai</p>
                      </div>
                  </a>
              </div>
          </div>
        </div>
        <div class="body-pesanan">
          <div class="pesanan-kosong">
              <div class="kosong">
                  <i class="fa-solid fa-parachute-box big"></i>
              </div>
  
              <p class="not-found">Anda Belum Memesan Apapun</p>
          </div>
      </div>
  </div>

    
    <div id="topay">
          <!-- Body-Pesanan -->
          <div class="body-title">
            <div class="title">
                <div class="semua">
                    <a onclick="semua()" class="all">
                        <div class="list">    
                            <i class="fa-solid fa-list"  style="color: gray;"></i>
                        </div>
                        <p>Semua</p>
                    </a>
                </div>
                <div class="belum-dibayar">
                    <a onclick="topay()"class="to-pay">
                        <div class="pay">
                            <div class="dollar">
                                <i class="fa-solid fa-money-check-dollar " style="margin-left: 5px;" style="color: #4b4ecd;" ></i>
                            </div>
                            <p>Pay</p>
                        </div>
                    </a>
                </div>
                <div class="dikemas">
                    <a onclick="dikemas()" class="dibungkus">
                        <div class="box">
                            <div class="kardus">    
                                <i class="fa-solid fa-box" style="margin-left: 1.6em;" ></i>
                            </div>
                            <p>Dikemas</p>
                        </div>
                    </a>
                </div>
                <div class="dikirim">
                    <a onclick="dikirim()" class="to-send">
                        <div class="truck">
                            <div class="mobil">
                                <i class="fa-solid fa-truck-fast "></i>
                            </div>
                            <p>Dikirim</p>
                        </div>
                    </a>
                </div>
                <div class="selesai">
                    <a onclick="selesai()"class="end">
                        <div class="box-open">
                            <div class="kardus-buka">
                                <i class="fa-solid fa-box-open "></i>
                            </div>
                            <p>Selesai</p>
                        </div>
                    </a>
                </div>
            </div>
          </div>
          <div class="body-pesanan">
            <div class="pesanan-kosong">
                <div class="kosong">
                    <i class="fa-solid fa-parachute-box big"></i>
                </div>
    
                <p class="not-found">Anda Belum Memesan Apapun</p>
            </div>
        </div>
          <!-- Body-Pesanan -->
    </div>


<div id="dikemas">
    
      <!-- Body-Pesanan -->
      <div class="body-title">
        <div class="title">
            <div class="semua">
                <a onclick="semua()" class="all">
                    <div class="list">    
                        <i class="fa-solid fa-list"   style="color: gray;"></i>
                    </div>
                    <p>Semua</p>
                </a>
            </div>
            <div class="belum-dibayar">
                <a onclick="topay()" class="to-pay">
                    <div class="pay">
                        <div class="dollar">
                            <i class="fa-solid fa-money-check-dollar " style="margin-left: 5px;"></i>
                        </div>
                        <p>Pay</p>
                    </div>
                </a>
            </div>
            <div class="dikemas">
                <a onclick="dikemas()" class="dibungkus">
                    <div class="box">
                        <div class="kardus">    
                            <i class="fa-solid fa-box"   style="color: #4b4ecd; margin-left: 1.6em;"></i>
                        </div>
                        <p>Dikemas</p>
                    </div>
                </a>
            </div>
            <div class="dikirim">
                <a onclick="dikirim()"class="to-send">
                    <div class="truck">
                        <div class="mobil">
                            <i class="fa-solid fa-truck-fast "></i>
                        </div>
                        <p>Dikirim</p>
                    </div>
                </a>
            </div>
            <div class="selesai">
                <a onclick="selesai()" class="end">
                    <div class="box-open">
                        <div class="kardus-buka">
                            <i class="fa-solid fa-box-open "></i>
                        </div>
                        <p>Selesai</p>
                    </div>
                </a>
            </div>
        </div>
      </div>
      <div class="body-pesanan">
        <div class="pesanan-kosong">
            <div class="kosong">
                <i class="fa-solid fa-parachute-box big"></i>
            </div>

            <p class="not-found">Anda Belum Memesan Apapun</p>
        </div>
    </div>
      <!-- Body-Pesanan -->
</div>


<div id="dikirim">
     <!-- Body-Pesanan -->
     <div class="body-title">
        <div class="title">
            <div class="semua">
                <a onclick="semua()" class="all">
                    <div class="list">    
                        <i class="fa-solid fa-list"  style="color: gray;"></i>
                    </div>
                    <p>Semua</p>
                </a>
            </div>
            <div class="belum-dibayar">
                <a onclick="topay()" class="to-pay">
                    <div class="pay">
                        <div class="dollar">
                            <i class="fa-solid fa-money-check-dollar "style="margin-left: 5px;" ></i>
                        </div>
                        <p>Pay</p>
                    </div>
                </a>
            </div>
            <div class="dikemas">
                <a onclick="dikemas()" class="dibungkus">
                    <div class="box">
                        <div class="kardus">    
                            <i class="fa-solid fa-box" style="margin-left: 1.6em;" ></i>
                        </div>
                        <p>Dikemas</p>
                    </div>
                </a>
            </div>
            <div class="dikirim">
                <a onclick="dikirim()"class="to-send">
                    <div class="truck">
                        <div class="mobil">
                            <i class="fa-solid fa-truck-fast " style="color: #4b4ecd;"></i>
                        </div>
                        <p>Dikirim</p>
                    </div>
                </a>
            </div>
            <div class="selesai">
                <a onclick="selesai()" class="end">
                    <div class="box-open">
                        <div class="kardus-buka">
                            <i class="fa-solid fa-box-open "></i>
                        </div>
                        <p>Selesai</p>
                    </div>
                </a>
            </div>
        </div>
      </div>
      <div class="body-pesanan">
        <div class="pesanan-kosong">
            <div class="kosong">
                <i class="fa-solid fa-parachute-box big"></i>
            </div>

            <p class="not-found">Anda Belum Memesan Apapun</p>
        </div>
    </div>
</div>

<div id="selesai">
     <!-- Body-Pesanan -->
     <div class="body-title">
        <div class="title">
            <div class="semua">
                <a onclick="semua()" class="all">
                    <div class="list">    
                        <i class="fa-solid fa-list"  style="color: gray;"></i>
                    </div>
                    <p>Semua</p>
                </a>
            </div>
            <div class="belum-dibayar">
                <a onclick="topay()" class="to-pay">
                    <div class="pay">
                        <div class="dollar">
                            <i class="fa-solid fa-money-check-dollar "style="margin-left: 5px;" ></i>
                        </div>
                        <p>Pay</p>
                    </div>
                </a>
            </div>
            <div class="dikemas">
                <a onclick="dikemas()" class="dibungkus">
                    <div class="box">
                        <div class="kardus">    
                            <i class="fa-solid fa-box" style="margin-left: 1.6em;"></i>
                        </div>
                        <p>Dikemas</p>
                    </div>
                </a>
            </div>
            <div class="dikirim">
                <a onclick="dikirim()"class="to-send">
                    <div class="truck">
                        <div class="mobil">
                            <i class="fa-solid fa-truck-fast "></i>
                        </div>
                        <p>Dikirim</p>
                    </div>
                </a>
            </div>
            <div class="selesai">
                <a onclick="selesai()" class="end">
                    <div class="box-open">
                        <div class="kardus-buka">
                            <i class="fa-solid fa-box-open " style="color: #4b4ecd;"></i>
                        </div>
                        <p>Selesai</p>
                    </div>
                </a>
            </div>
        </div>
      </div>
      <div class="body-pesanan">
        <div class="pesanan-kosong">
            <div class="kosong">
                <i class="fa-solid fa-parachute-box big"></i>
            </div>

            <p class="not-found">Anda Belum Memesan Apapun</p>
        </div>
    </div>
</div>
<x-bottomnavbar/>
</body>
</html>