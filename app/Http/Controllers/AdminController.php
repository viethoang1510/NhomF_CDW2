<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Users;
use App\CategoryModel;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
  
    public function index()
    {
        $listCat = CategoryModel::all();
        return view('home',compact('listCat'));
    }

    public function show()
    {
        return view('pages.admin.main');
    }
    
    public function detailuser(){
        $listCat = CategoryModel::all();
       return view('detailuser',compact('listCat'));
    }

    public function listuser(){
        $listCat = CategoryModel::all();
        $users = Users::where('role','user')->get();
        return view('account.index',['users'=>$users]);
    }
    public function doimatkhau(Request $request){
        $listCat = CategoryModel::all();
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6'
        ]);

       $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)){
            $user = Users::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Session::flash('sub', 'Bạn đã đổi mật khẩu thành công!');
            return view('detailuser',compact('listCat'));
        }
        else{
            Session::flash('sub', 'Email hoặc mật khẩu không đúng!');
        }
   }
}