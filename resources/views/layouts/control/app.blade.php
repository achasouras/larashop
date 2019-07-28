@include('layouts.control.head')

<body @yield('body_tags')>
<div class="container-fluid">

    @include('layouts.control.nav')

    <div class="row">

        @include('layouts.control.sidenav')
        <div class="col s9 control_main_contain">
            @yield('body_content')
        </div>
    </div>

</div>



</body>


@include('layouts.control.footer')