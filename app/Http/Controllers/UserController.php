<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;
use App\CategoryModel;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCat = CategoryModel::all();
        return view('detailuser',compact('listCat'));
    }
    public function listuser(){
        $listCat = CategoryModel::all();
        $users = Users::where('role','user')->get();
        return view('account.index',['users'=>$users])->compact('listCat');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listCat = CategoryModel::all();
        $user = Users::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->address = $request->address;
        Session::put('message','Sửa thông tin tài khoản thành công');  
        $user->save();
        return view('detailuser',compact('listCat'));
    }


}
