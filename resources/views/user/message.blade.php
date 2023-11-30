<x-headlink/>
    <title>Message</title>
    <link rel="stylesheet" href="/public/css/massage.css">
  
</head>
<body>
@if (Route::has('login'))
<!-- user page -->
                    @auth
    <div id="navbar">
        <div class="nav">
             <a class="add"  href="{{ route('beranda') }}"><i class="fa fa-arrow-left"></i></a>
             <div class="title">Message</div>
        </div>
    </div> 
    <div id="msg-box">
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Supriatna</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Jajang</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Yunyun</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Hasan</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Juki</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Oha</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>
        <div class="foto">
            <div class="msg-foto"><img src="public/img/Massage/sample.jpg" alt="" height="100px"></div>
            </div>
            <div class="msg">   
                <div class="nickname">Haji</div>
                <div class="chat"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda cum incidunt porro tempore illo cupiditate quisquam soluta iusto tenetur possimus expedita ullam sint consequuntur nostrum dolor est, quod nesciunt?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus, fuga ipsam aperiam voluptatum architecto ullam molestias quidem tempore sunt nobis necessitatibus eaque quo, corporis magni quaerat quos quia earum.
                            </p></div>
        </div>


        <!-- end massage -->
        <div class="msg">   
                <div class="chat"><p> </p></div>
        </div>
       </div>

<!-- guest page -->
       @else
                 
       <div id="navbar">
        <div class="nav">
        <a class="add" href="{{ route('beranda') }}"><i class="fa fa-arrow-left"></i></a>
            <div class="title">Message</div>


        </div>
       </div> 
        <div class="guest"><h1>Please <a href="{{ route('login') }}">Login</a></h1></div>
        </div>
                    @endauth
                
            @endif
</body>
</html>