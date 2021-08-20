<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use App\Models\Banner;
use App\Models\Branch;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
// use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function credentials(Request $request){
    //     return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'];
    // }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('frontend.login');
    }
    public function error($type){
        return response()->json([
            'errors'  => [
                $type.' không đúng'
            ]
        ], 402);
    }
    public function checkField($name){
        $field='';
        if (is_numeric($name)) {
            return $field = 'phone';
        } elseif (filter_var($name, FILTER_VALIDATE_EMAIL)) {
            return $field = 'email';
        }
        else{
            return $this->error('Người dùng');
        }
    }
    public function login(LoginRequest $request){
        $field=$this->checkField($request->name);
        $request->merge([$field => $request->name]);
        if($user=User::where($field,$request->$field)->first()){
            $user_id=$user->id;
        }
        else{
            return $this->error('Người dùng');
        }
        if($user_id){
            if(Auth::attempt([$field => $request->$field, 'password' => $request->password,'status'=>'1'])){
                $slug=Auth::user()->roles->pluck('slug');
                // if($slug=='')
                // $role=Auth::user()->roles->pluck('slug');
                switch ($slug[0]) {
                    case 'admin':
                        $route="/quan-ly";
                        break;
                    case 'thu-ngan':
                        $route="ban-hang";
                        break;
                    default:
                        $route="/";
                        break;
                }
                Session::put('role',$slug[0]);
                return response()->json($route);

            }
            else{
                return $this->error('Mật khẩu');
            }
        }
    }

    public function logout(){
        // Session::forget('user');
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }
 
    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users      =   User::where(['email' => $userSocial->getEmail()])->first();
        // dd($users);
        if($users){
            Auth::login($users);
            return redirect('/')->with('success','You are login from '.$provider);
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
         return redirect()->route('home');
        }
    }
}
