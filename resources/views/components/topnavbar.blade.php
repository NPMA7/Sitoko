
<style>


        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}

      .navbar {
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    display: flex;
    position: fixed;
    top:-1px;
    z-index: 0;
    width: 100vw;
    height: 50px;
    background-color: #ffffff;
  }
  .logo{
    margin-top: 8px;
    font-size: 30px;
    margin-left: 10.5vw;
    color: #4b4ced;
    font-weight: lighter;
  }
  .search-box {
    margin-top: 8px;
    width: 50vw;
    margin-left: 1em;
    display: flex;
    padding: 8px 20px;
    border-radius: 50px;
    background: linear-gradient(to right, #37b7e9cc, #4b4beda1);
    outline: 1px solid #4b4ced;
    align-items: center;
    height: 35px;
  }
  .search-box .search-icon {
    margin-left: .5vw;
    font-size: 1.1rem;
  }
  .search-input .input {
    height: 35px;
    border: none;
    outline: none;
    background-color: unset;
    margin-left: 2vh;
    padding: 1px;
    color: #fff;
    letter-spacing: 0.8px;
    width: 50vw;
    font-size: 1em;
  }
  .search-icon {
    display: flex;
    align-items: center;
    justify-content: right;
    margin-left: 2.5vw; 
    gap: 2vw;
  }

@media screen and (max-width:1022px){
.navbar {
    margin-top: -1px;
    display: flex;
    position: fixed;
    z-index: 0;
    width: 100em;
    height: 50px;
    background-color: #ffffff;
  }
.logo{
  display: none;
}

.search-box{
  margin-left: 5.5vw;
  width:70vw
}
.search-icon {
  display: flex;
  align-items: center;
  justify-content: right;
  margin-left: 4vw; 
  gap: 4vw;
}
.wishlist, .user {
  display: none;
}
}

@media screen and (max-width:767px) {
      .navbar {
    margin-top: -1px;
    display: flex;
    position: fixed;
    z-index: 0;
    width: 100em;
    height: 50px;
    background-color: #ffffff;
  }
.logo, .wishlist, .user{
  display: none;
}

.search-box{
  margin-left: 5.5vw;
  width:64vw
}
.search-icon {
  display: flex;
  align-items: center;
  justify-content: right;
  margin-left: 4vw; 
  gap: 4vw;
}

}
</style>

    <!-- HeadNavbar -->
    <div class="navbar">
      <div class="logo"> <a href="{{ route('beranda') }}" style="text-decoration:none; color: #4b4ecd;">SITOKO</a></div>
        <div class="search-box">
            <div class="search-icon" id="search">
              <i class="fa-solid fa-magnifying-glass f-l" style="color: #ffffff"></i>
            </div>
            <div class="search-input">
              <input type="text" class="input" placeholder="Search" />
            </div>
          </div>
          <div class="search-icon">
           
              <div class="cart"><a href="{{ route('keranjang') }}"><i class="fa fa-cart-shopping cart-icon" style="color: #4b4ecd"></i></a>
              </div>
              <div class="message"><a href="{{ route('message') }}"><i class="fa fa-message" style="color: #4b4ecd"></i></a>
              </div>
             <div class="wishlist"><a href=""><i class="fa fa-heart icon" style="color: #4b4ecd;"></i></a>
              </div>
              <div class="user"><a href="{{ route('profile') }}"><i class="fa fa-user icon" style="color: #4b4ecd;"></i></a>
              </div>

          </div>
    </div>