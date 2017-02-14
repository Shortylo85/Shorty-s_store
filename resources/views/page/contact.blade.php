@extends('layout.master')

@section('content')

    <div id="content">
        @if(Session::has('mailed'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 alert alert-info">
            {{Session::get('mailed')}}
        </div>
    </div>
        @endif
        <div class="row-fluid">
            <div class="span8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181012.9599644923!2d20.5860988671573!3d44.855627230777884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475081e8f8fe5fc3%3A0x8fb1cf95a722b32a!2zUGFuxI1ldm8!5e0!3m2!1sen!2srs!4v1483719870844" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <h3>Shorty's Store </h3>
                <hr>
                <address>
                    <strong>Address:</strong> Cara Dušana 67 69034 Kragujevac<br>
                    <strong>Phone:</strong> 065 555 555<br>
                    <strong>E-mail:</strong> shortystore@somemail.com
                </address>

            </div>

            <div class="col-sm-8 contact-form">
                <h4><strong> For questions and information please send us an email <i class="fa fa-envelope-o" aria-hidden="true"></i>

                    </strong></h4>
                <form id="contact" method="post" class="form" role="form" action="{{route('send-mail')}}">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                        </div>
                    </div>
                    <textarea class="form-control" type="text" id="content" name="content" placeholder="Message" rows="5"></textarea>

                    <br />
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button id="select-btn" class="btn btn-primary pull-right" type="submit">Submit</button>
                        </div>
                        {{csrf_field()}}
                    </div>
                </form>

            </div>

        </div>

    </div><!-- /content -->

@endsection