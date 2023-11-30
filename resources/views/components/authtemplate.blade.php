@if (Route::has('login'))
<!-- user page -->
                    @auth
<div></div>
<!-- guest page -->
       @else
           <div></div>      

                    @endauth
                
            @endif
</body>
</html>