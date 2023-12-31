<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href={{ route('home.index') }}> <img src={{asset('img/logo.png')}} alt="logo"> </a>
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
                                <a class="nav-link" href={{ route('shop.index') }}>shop</a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link" href={{ route('contact.index') }}>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex justify-content-center align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                           

                        </div>
                        @auth
                        <div class="d-flex justify-content-center align-items-center gap-4 border border-dark" ">
                             <h6 class=" ml-1 mb-0">{{auth()->user()->name}}</h6>
                            <form action={{ route('logout') }} method="POST">
                                @csrf
                                <button type="submit" class="btn bg-none d-flex justify-content-center align-items-center ">
                                    <i class="fa-solid fa-arrow-right-from-bracket "></i>
                                </button>
                            </form >
                        </div>
                      
                        @else
                        
                            <a href={{ route('loginuser.index') }}><i class="fa-solid fa-user"></i></a>

                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->
