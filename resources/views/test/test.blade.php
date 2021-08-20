@extends('layouts.frontend.master')
@section('title','True Blues')
@section('main-content')
  <section class="top-spad">
    <h1>Pusher Test</h1>
<p>
  Try publishing an event to channel <code>my-channel</code>
  with event name <code>my-event</code>.
</p>
  </section>
@endsection   
@push('scripts')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('776b5420460367637aa0', {
    cluster: 'ap1'
  });
  var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    alert(data);
    });
</script>
@endpush