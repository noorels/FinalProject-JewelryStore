<div class="header_bottom_section">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="full ">
                    <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="float-left">Menu</span>
                                <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('frontsite.home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-aqua-hover" href="{{route('frontsite.about')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-aqua-hover" href="{{route('frontsite.jewellery')}}">Jewellery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-grey-hover" href="{{route('frontsite.shop')}}">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-grey-hover" href="{{route('frontsite.contact')}}">Contact</a>
                                    </li>
                                      @guest
                                   <li class="nav-item">
                                   <a class="nav-link" href="{{route('login')}}">Login <span
                                class="sr-only">(current)</span></a>
                                 </li>
                                  @endguest

                                   @auth
                                  <li class="nav-item">
                                  <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard <span class="sr-only">(current)</span></a>
                                   </li>

                                 <li class="nav-item">
                                   <a class="nav-link" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a>
                                </li>
                             @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="search_bar">
                        <form action="index.html">
                            <input type="text" class="search_field" placeholder="Search" required />
                            <button class="search_button" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
