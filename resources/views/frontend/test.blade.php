@extends('layouts.frontend.master')
@section('title','True Blues')
@section('main-content')
<section class="spad-top">
    <div class="container">
<h1>Pusher Test</h1>
        <p>
          Try publishing an event to channel <code>my-channel</code>
          with event name <code>my-event</code>.
        </p>
    </div>
</section>
@endsection
@push('scripts')
    <script>
       
    var pusher = new Pusher('4d9937a21f2d32958fb7', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(data);
    });
    </script>
@endpush