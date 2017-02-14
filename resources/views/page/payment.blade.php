@extends('layout.master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">Payment form</h1>

            <form action="{{route('payment.store')}}" method="POST" id="payment-form">

                <br>
                    <p style="color: red"><em><strong><span class="payment-errors"></strong></span></em></p>
                <br>
                    <label for="number">Card Number</label>
                    <input type="text" size="20" class="form-control" name="number" data-stripe="number">

                <div class="row">
                    <div class="col-md-6">
                        <label for="exp_month">Expiration month</label>
                        <input type="text" size="2" class="form-control" name="exp_month" data-stripe="exp_month">
                    </div>

                    <div class="col-md-6">
                        <label for="exp_year">Expiration year</label>
                        <input type="text" size="2" class="form-control" name="exp_year" data-stripe="exp_year">
                    </div>
                </div>


                    <label for="cvc">CVC</label>
                    <input type="text"  size="4" class="form-control" name="cvc" data-stripe="cvc">
                    <br>
                    <input type="submit" class="submit btn btn-lg btn-success pull-right" value="Submit Payment">
                    {{csrf_field()}}



            </form>


        </div>
    </div>


@endsection