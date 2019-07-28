<html>
    <head>
        {!! MaterializeCSS::include_full() !!}
    </head>
    <body>

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    Basic Product view: <br>
        <a href="{{route('create_product')}}">Create product</a> <br>
        <a href="{{route('create_attribute')}}">Create attribute</a> <br>
        <br>

        Products: <br>
        @php
            foreach ($products as $product){

                echo '<br>' . $product->name;

            }
        @endphp
    </body>
</html>
