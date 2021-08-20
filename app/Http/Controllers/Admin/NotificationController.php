<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Auth;
class NotificationController extends Controller
{
    public function index(){
        $data['notifications']=Auth::user()->notifications;
        $data['count']=count(Auth::user()->unreadNotifications);
        return response()->json($data);
    }
    public function all(){
        dd('ok');
        // return view('admin.notification.index');
    }
    public function mark(Request $request){
        $notification = auth()->user()->unreadNotifications()->find($request->id);
        if($notification) {
            $notification->markAsRead();
        }
        return true;
        
    }
    public function show(Request $request){
        $notification=Auth()->user()->notifications()->where('id',$request->id)->first();
        if($notification){
            $notification->markAsRead();
            return redirect($notification->data['actionURL']);
        }
    }
    public function delete($id){
        $notification=Notification::find($id);
        if($notification){
            $status=$notification->delete();
            if($status){
                request()->session()->flash('success','Notification successfully deleted');
                return back();
            }
            else{
                request()->session()->flash('error','Error please try again');
                return back();
            }
        }
        else{
            request()->session()->flash('error','Notification not found');
            return back();
        }
    }
}
