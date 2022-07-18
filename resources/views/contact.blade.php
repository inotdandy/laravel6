@extends('layouts')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <form action="/contact" method="post">
                @csrf
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <div class="control">
                        <input type="text" class="input" name="email">
    
                        @error('email')
                            <p style="color:red; font-weight: bold; font-size:14px;">{{ $message }}</p>
                        @enderror
                    </div>
                    @if(session('message'))
                        <p class="color:green; font-weight: bold; font-size:14px;">{{ session('message') }}</p>
                    @endif
                </div>
                

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection