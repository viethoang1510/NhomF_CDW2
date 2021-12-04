<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\CategoryModel;
use Illuminate\Support\Facades\DB;
use Mail;
use Session;
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
    public function testEmail(Request $request){
        $name =  "Hoàng";
        Mail::send('emails.test',compact('name'), function($email){
            $email->to('tieutam1510@gmail.com','Dien thoai nat'); 
            
        });
        Session::flash('tub', 'Yêu cầu bạn xác nhận email!');
        return redirect('detail');
    }
}
