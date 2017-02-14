@extends('layout.master')

@section('content')

    <div id="content">
        <div class="row">

            <div class="col-md-4 col-md-offset-4 alert alert-success" {{!Session::has('success')?'hidden':''}}>
                {{Session::get('success')}}
            </div>

            <div class="col-md-4 col-md-offset-4 alert alert-success" {{!Session::has('not_logged')?'hidden':''}}>
                {{Session::get('not_logged')}}
            </div>

        </div>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{URL::to('images_slider/1.jpg')}}" alt="...">
                    <div class="carousel-caption">
                        <h2>Nice price - nice gadget</h2>
                        <p>Pick best and shiny</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{URL::to('images_slider/2.jpg')}}" alt="...">
                    <div class="carousel-caption">
                        <h2>Best buy for a while</h2>
                        <p>Take your chance - pick best buy</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{URL::to('images_slider/3.jpg')}}" alt="...">
                    <div class="carousel-caption">
                        <h2>Sometimes something nice</h2>
                        <p>Every month discount for you</p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /carousel -->

        <div class="jumbotron">
            <h1>Welcome to our store!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean libero eros, luctus nec viverra id, condimentum vel sapien. Duis viverra mollis sollicitudin. Nulla ipsum leo, rhoncus quis tempus ac, tempus non tellus. Quisque non lacus luctus, dapibus tellus ac, tincidunt orci. Nulla nisl lorem, dignissim et eros accumsan, porta porta nisl. In ac est non nulla tempus consectetur. Donec vitae commodo leo, et ornare mi. Ut a tellus vel sem convallis consectetur. Cras at massa vitae quam imperdiet tempus.

                Suspendisse commodo cursus risus, non dictum nisl sollicitudin sit amet. Aenean consequat accumsan nisi quis suscipit. Praesent ultricies, sapien sit amet fringilla accumsan, ligula mauris volutpat arcu, id rutrum quam mauris nec justo. Curabitur vel odio suscipit, bibendum turpis quis, faucibus dolor. Sed nulla leo, ultrices eu auctor non, aliquet nec sapien. Morbi at urna elementum, venenatis lorem sit amet, ultrices tortor. Nunc sed fringilla velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod dapibus dolor ac malesuada. Duis eu finibus orci. Pellentesque vitae pharetra massa, nec dignissim risus. Nam interdum vulputate quam, elementum ultrices nunc.</p>
            <p><a class="btn btn-primary btn-lg" href="{{route("page.contact")}}" role="button">Find us here...<i class="fa fa-globe" aria-hidden="true"></i></a></p>
        </div><!-- /jumbotron -->

    </div><!-- /content -->


@endsection

