
<div class="wrap-menu-header gradient1 trans-0-4">
    <div class="container h-full">
        <div class="wrap_header trans-0-3">

            <div class="logo">
                <a href="{{route('front.page.home')}}">
                    <img src="{{asset('front/images/icons/logo.png')}}" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                </a>
            </div>


            <div class="wrap_menu p-l-45 p-l-0-xl">
                <nav class="menu">
                    <ul class="main_menu">
                        <li class="{{ Menu::isActiveRoute('front.page.home')  }}">
                            <a href="{{route('front.page.home')}}">Home</a>
                        </li>

                        <li class="{{ Menu::isActiveRoute('front.page.menu')  }}">
                            <a href="{{route('front.page.menu')}}">
                                Menu
                            </a>
                        </li>

                        <li class="{{ Menu::isActiveRoute('front.page.reservation')  }}">
                            <a href="{{route('front.page.reservation')}}">Reservation</a>
                        </li>

                        <li class="{{ Menu::isActiveRoute('front.page.about')  }}">
                            <a href="{{route('front.page.about')}}">About</a>
                        </li>

                        <li class="{{ Menu::isActiveRoute('front.page.contact')  }}">
                            <a href="{{route('front.page.contact')}}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="social flex-w flex-l-m p-r-20">
                <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

                <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
            </div>
        </div>
    </div>
</div>