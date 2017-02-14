<!-- Static navbar -->


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('page.home')}}"><p><i class="fa fa-laptop" aria-hidden="true"></i> Shorty's Store <span> <i class="fa fa-arrow-left" aria-hidden="true"></i>
  </span></p></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('user.index')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> Users <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('product.index')}}"><i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        Products</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('user.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>