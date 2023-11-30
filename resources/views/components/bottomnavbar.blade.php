
<!--Footer NavBar-->

<div class="footernav">
    <div class="body-footer">
        <div class="segmen-home">
            <a href="{{ route('beranda') }}" class="s-home" >
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
                
            </a>
        </div>
        <div class="segmen-notif">
            <a href="#" class="s-notif" >
                <i class="fa-sharp fa-solid fa-bell"></i>
           
                <p>Notification</p>
            </a>
        </div>
        <div class="segmen-wishlist">
            <a href="#" class="s-wish" >
                <i class="fa-solid fa-heart icon"></i>
                <p>Wishlist</p>
            </a>
        </div>
        <div class="segmen-user">
            <a href="{{ route('profile') }}" class="s-user" >
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
        </div>
    </div>
</div>
</body>


<style>

    .footernav {
        display: none;
    }

 
@media screen and (max-width:1022px){
.footernav {
    position: fixed;
    display: flex;
    top: 90vh;
    width: 100vw;
    height: 10vh;
    background-color: whitesmoke;
  }
  .body-footer {
    position: relative;
    display: flex;
    width: 100vw;
    height: 10vh;
   gap: 8vw;
   font-size: .7rem;
    align-items: center;
    justify-content: center;
  }
  .segmen-home,.segmen-user,.segmen-wishlist, .segmen-notif{
    width: 10em;
    height: 5em;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .s-home,.s-user,.s-wish,.s-notif{
    position: fixed;
    text-align: center;
    color: gray;
    font-size: 1.5em;
    text-decoration: none;
  }
  .nontifikasi{
    display: flex;
  }

}

@media screen and (max-width:767px) {

.footernav {
    position: fixed;
    display: flex;
    top: 90vh;
    width: 100vw;
    height: 10vh;
    background-color: whitesmoke;
  }
  .body-footer {
    position: relative;
    display: flex;
    width: 100vw;
    height: 10vh;
   gap: 8vw;
   font-size: .7rem;
    align-items: center;
    justify-content: center;
  }
  .segmen-home,.segmen-user,.segmen-wishlist, .segmen-notif{
    width: 10em;
    height: 5em;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .s-home,.s-user,.s-wish,.s-notif{
    position: fixed;
    text-align: center;
    color: gray;
    font-size: 1.5em;
    text-decoration: none;
  }
  .nontifikasi{
    display: flex;
  }

}
</style>