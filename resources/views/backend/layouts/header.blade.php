<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href={{ route('home.index') }}> <img src="img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href={{ route('home.index') }}>Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href={{ route('shop.index') }}>products</a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link" href={{ route('contact.index') }}>boxoffice</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex justify-content-center align-items-center">
                      
                        @auth
                            <form action={{ route('logout') }} method="POST">
                                @csrf
                                <button type="submit" class="btn bg-none">
                                    <i class="fa-solid fa-arrow-right-from-bracket ml-4"></i>
                                </button>
                            </form>
                        @else
                            <a href={{ route('loginuser.index') }}><i class="fa-solid fa-user"></i></a>

                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
  
</header>
<!-- Header part end-->
