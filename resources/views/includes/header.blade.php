<div class="row">
    <a href="{{route('page.home')}}">
        <div class="col-md-4 col-sm-12 logo">

                    <h1><i class="fa fa-laptop" aria-hidden="true"></i> Shorty's <span class="invert_logo"> Store </span></h1>
                <p class="subtext">Technology at one place</p>

         </div>
    </a>
</div>

<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('page.home')}}"><i class="fa fa-home" aria-hidden="true"></i>
                        Home</a></li>
                <li><a href="{{route('page.products')}}"><i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </i>
                        Products</a></li>
                {{--<li><a href="{{route('page.account')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My account</a></li>--}}

                <li><a href="{{route('page.cart')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true">        </i>
                        Cart <span class="badge">{{Session::has('cart')? Session::get('cart')->totalQuantity : ''}}</span>

                    </a>
                </li>

                <li><a href="{{route('page.contact')}}"><i class="fa fa-phone-square" aria-hidden="true"></i>
                        Contact us</a></li>


            </ul>
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<form action="#" class="navbar-form">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" name="title" class="form-control" placeholder="Search...">--}}
                    {{--</div>--}}
                    {{--<button class="btn btn-default"> <span><i class="fa fa-search" aria-hidden="true"></i>--}}
{{--</span> Search</button>--}}
                {{--</form>--}}

            {{--</ul>--}}
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>User profile<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        @if(!Auth::check())

                            <li><a href="{{route('login')}}"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in </a></li>
                            <li><a href="{{route('register')}}"><span><i class="fa fa-user-plus" aria-hidden="true"></i>
    </span> Register </a></li>
                        @elseif(Auth::user()->isAdmin())
                            <li><a href="{{route('product.index')}}"><span><i class="fa fa-cogs" aria-hidden="true"></i>

    </span> <strong>ADMIN CMS</strong> </a>
                            </li>

                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('user.logout')}}"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>

                        @else

                            <li><a href="{{route('page.account')}}"><span><i class="fa fa-money" aria-hidden="true"></i>
</span> My orders</a></li>

                            <li role="separator" class="divider"></li>
                        <li><a href="{{route('user.logout')}}"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>

                        @endif
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>