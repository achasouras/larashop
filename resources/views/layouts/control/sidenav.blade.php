<div class="col s3 control_sidebar">
        <div class="control_sidebar_title">
            Control panel
        </div>

        <ul class="control_sidebar_items">
            <a href="{{route('products')}}"><li class="control_sidebar_item waves-effect"><i class="small material-icons">gradient</i><div class="control_sidebar_label">Products</div></li></a>
            <a href=""><li class="control_sidebar_item waves-effect"><i class="small material-icons">shopping_cart</i><div class="control_sidebar_label">Orders</div></li></a>
            <a href=""><li class="control_sidebar_item waves-effect"><i class="small material-icons">receipt</i><div class="control_sidebar_label">Coupons</div></li></a>
            <a href=""><li class="control_sidebar_item waves-effect"><i class="small material-icons">play_arrow</i><div class="control_sidebar_label">Subscriptions</div></li></a>
            <a href=""><li class="control_sidebar_item waves-effect"><i class="small material-icons">person</i><div class="control_sidebar_label">Users</div></li></a>
            @yield('control_sidebar_main_items')
        </ul>
        <hr class="control_sidebar_items" style="color: #a2a2a2">
        @yield('control_sidebar_additional')
</div>

