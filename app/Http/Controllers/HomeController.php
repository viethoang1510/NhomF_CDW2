<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\CategoryModel;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Models\Customer;
use Illuminate\Support\Str;
use App\Http\Models\User;
use App\Users;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listCat = CategoryModel::all();
        $slides = DB::table('banner')->get();
        return view('home',['slides'=>$slides],compact('listCat'));
    }
    
    // public function testEmail(){
    //     $name =  "test name for email";
    //     Mail::send('emails.test',compact('name'), function($email){
    //         $email->to('thuongtvt30@gmail.com','Dien thoai nat'); 
    //     });
    //     return redirect('home');
    // }
    // public function forgetpass(){
        
    // }
    public function postforgetPass(Request $req){
        $token = strtoupper(Str::random(10));
        $users = Users::where('email', $req->email)->first();      
        $users->update(['token'=>$token]);
        Mail::send('emails.check_email_forget',compact('users'), function($email) use($users){
            $email->to($users->email,$users->name); 
        });
        return redirect()->back();
    }
    public function getPass(Users $users, $token)
    {
       
       if($users->token === $token)
       {
    
           return view('auth.passwords.getPass')->with(compact('users'));
       }
       return abort(404);
    }  
    public function postgetPass(Request $req,$id)
    { 
        

        $req->validate([
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $user = Users::find($id);
        $password_h =bcrypt($req->password);
        $user->update(['password'=>$password_h,'token'=>null]);
        return view('auth.login');
    }
}
