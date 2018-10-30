<!-- Button Hide sidebar -->
<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

<ul class="menu-sidebar p-t-95 p-b-70">

    <li class="t-center m-b-13 {{ Menu::isActiveRoute('front.page.home')  }}">
        <a class="txt19" href="{{route('front.page.home')}}">Home</a>
    </li>

    <li class="t-center m-b-13 {{ Menu::isActiveRoute('front.page.menu')  }}">
        <a class="txt19" href="{{route('front.page.menu')}}">Menu</a>
    </li>

    <li class="t-center m-b-13 {{ Menu::isActiveRoute('front.page.about')  }}">
        <a class="txt19" href="{{route('front.page.about')}}">About</a>
    </li>

    <li class="t-center m-b-13 {{ Menu::isActiveRoute('front.page.contact')  }}">
        <a class="txt19" href="{{route('front.page.contact')}}">Contact</a>
    </li>

    <li class="t-center {{ Menu::isActiveRoute('front.page.reservation')  }}">
        <!-- Button3 -->
        <a href="{{route('front.page.reservation')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
            Reservation
        </a>
    </li>
</ul>
