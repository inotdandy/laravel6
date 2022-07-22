@extends('layouts')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            
            <ul>
                @forelse($notifications as $notification)
                    <li>Your payment of {{$notification->data['amount'] }} has been received</li>
                @empty
                    <p>No unreadnotifications found</p>
                @endforelse
            </ul>
        </div>
    </div>
@endsection