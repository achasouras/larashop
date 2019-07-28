<div class="col s3 control_sidebar">
        <div class="control_sidebar_title">
            Control panel
        </div>

        <ul class="control_sidebar_items">
            <a href="{{route('products')}}"><li class="control_sidebar_item"><i class="small material-icons">gradient</i>Products</li></a>
            <a href=""><li class="control_sidebar_item"><i class="small material-icons">shopping_cart</i>Orders</li></a>
            <a href=""><li class="control_sidebar_item"><i class="small material-icons">receipt</i>Coupons</li></a>
            <a href=""><li class="control_sidebar_item"><i class="small material-icons">play_arrow</i>Subscriptions</li></a>
            <a href=""><li class="control_sidebar_item"><i class="small material-icons">person</i>Users</li></a>
            @yield('control_sidebar_main_items')
        </ul>
        <hr class="control_sidebar_items" style="color: #a2a2a2">
        @yield('control_sidebar_additional')
</div>

