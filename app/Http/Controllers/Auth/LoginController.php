<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    // public function redirectTo()
    // {
    //     if(Auth::user()->role == 1)
    //     {
    //         $this->redirectTo = '/admin';
    //         return $this->redirectTo;
    //     }
    //     elseif (Auth::user()->role == 0)
    //     {
    //         $this->redirectTo = '/customer';
    //         return $this->redirectTo;
    //     }
    //     else {
    //         $this->redirectTo = '/login';
    //         return $this->redirectTo;
    //     }
    // }

    public function getLogin() {
        return view('auth/login');
    }

    
    public function postLogin(Request $request){
        $rules = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
            if( Auth::attempt($rules)) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                Session::flash('success', 'Bạn đã đăng nhập thành công!');
                return redirect('home');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('login');
            }
        
        // if (Auth::attempt($data)) {
        //     return view('home')->with('success',"Bạn đã đăng nhập thành công");
        // }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
