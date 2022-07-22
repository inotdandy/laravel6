@extends('layouts')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <form action="/payment" method="post">
                @csrf
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Payment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection