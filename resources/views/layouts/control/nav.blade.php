<nav>
    <div class="nav-wrapper">
        {{--@todo put shop name here--}}
        <a href="/control" class="brand-logo">Anch Shop - @yield('control.menu.main.logoside')</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="">Settings</a></li>
            @yield('control.menu.main')
        </ul>
    </div>
</nav>