var pusher = new Pusher('51e7b597af7262676843', {
    cluster: 'ap1',
    forceTLS: true
});
var channel = pusher.subscribe('my-channel');
channel.bind('App\\Events\\NotificationEvent', function(data) {
    toastr.success('Bạn có thông báo mới');
    getNotification();
});
getNotification(); 

function bellNotification(count){
    if(count==0){
        content=`<i class="fas fa-bell" ></i>`;
    }
    else{
        content=`<i class="fas fa-bell active" ></i>
            <span id="count-notification" class="badge badge-danger badge-counter" >`+count+`</span>`;
    }
    $(".bell-notification").html(content);
    
}
function getAllNotification(){
    $.ajax({
        type: 'get',
        dataType: 'json',
        url:config.routes.notification_index,

        success: function(result) 
            {
                var count=result.count;
                content="";
                for (var item of result.notifications) {
                    notification=item['data'];
                    var data=getUser(notification['user_code']);
                    var user=data.user;
                    read_at=item.read_at==null?'read-at':'';
                    content+=`<a class="dropdown-item notification-item d-flex align-items-center `+read_at+`" onclick="detailNotification(this); return false;" data-href="`+notification.url+`" data-id="`+item.id+`">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle img-profile" src="`+user.avatar+`"alt="...">`;
                                    if(data.online==true){
                                        content+=`<div class="status-indicator bg-success"></div>`;
                                    }
                    content+=`</div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">`+notification.title+`</div>
                                    <div class="small text-333">`+moment(notification.created_at).locale("vi").fromNow()+`</div>
                                </div>
                            </a>`;
                }
                $("#table-name").text(`Thông báo (`+count+`)`);
                $(".notification").html(content);
            }
        });
}
function getNotification() {
    $.ajax({
        type: 'get',
        dataType: 'json',
        url:config.routes.notification_index,

        success: function(result) 
            {
                var count=result.count;
                $("#count-notification").text(count);
                content="";
                content+=`<div class="dropdown-header-notification">
                            Thông báo (`+count+`)
                        </div>
                        <div class="dropdown-main-notification">`;
                for (var item of result.notifications) {
                    notification=item['data'];
                    var data=getUser(notification['user_code']);
                    var user=data.user;
                    read_at=item.read_at==null?'read-at':'';
                    content+=`<a class="dropdown-item notification-item d-flex align-items-center `+read_at+`" onclick="detailNotification(this); return false;" data-href="`+notification.url+`" data-id="`+item.id+`">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle img-profile" src="`+user.avatar+`"alt="...">`;
                                    if(data.online==true){
                                        content+=`<div class="status-indicator bg-success"></div>`;
                                    }
                    content+=`</div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">`+notification.title+`</div>
                                    <div class="small text-333">`+moment(notification.created_at).locale("vi").fromNow()+`</div>
                                </div>
                            </a>`;
                }
                content+=`</div><a class="dropdown-item text-center text-333" href="`+config.routes.notification_all+`">Xem tất cả</a>`;
                $(".dropdown-notification").html(content);
                bellNotification(count);

        },
        error: function(response) {
            var errors = response.responseJSON.errors;
            showError(errors);
        }
    });

}

function getUser(code) {
    var data = false;
    $.ajax({
        type: 'post',
        dataType: 'json',
        data:{
          code:code
        },
        async: false,
        url:config.routes.user_show,
        success: function(result) {
            data=result;
        }
    });
    return data;
}  
function detailNotification(e) {
    var href=$(e).attr('data-href');
    var id=$(e).attr('data-id');
    $.ajax({
        type: 'post',
        dataType: 'json',
        data:{
            id:id
        },
        async: false,
        url:config.routes.notification_mark,
        success: function(result) {
            console.log(result);
            getNotification();
            // window.location.href=href;
        }
    });
}