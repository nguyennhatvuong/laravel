
<li class="nav-item dropdown no-arrow  mx-1" >
    <a class="nav-link dropdown-toggle bell-notification" onclick="getNotification(); return false;" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </a>
    <div class="dropdown-list dropdown-notification dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
    </div>
</li>
@push('scripts')
    <script>
        var config = {
        routes: {
            notification_index:'{{route("admin.notification.index")}}',
            user_show:"{{ route('admin.user.show') }}",
            notification_mark:"{{ route('admin.notification.mark') }}",
            notification_all:"{{ route('admin.notification.all') }}",
        }
    };
    </script>
    <script src="{{asset('js/notification.js')}}"></script>
@endpush