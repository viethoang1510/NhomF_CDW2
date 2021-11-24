
@extends('pages.customer.main')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="  bg-white border rounded border-info col-sm-10">
            <h3 class="mt-3" style="font-weight: bold; color: #4A235A;">Thông tin tài khoản</h3>
            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                                ?>
            <div class="row">

                <div class="col-sm-10 mt-3">
                    <form action="{{ route('info.update',Auth::user()->id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" style="font-weight: bold">Tên người dùng</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-weight: bold">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ Auth::user()->email }}">

                        </div>

                        <div class="form-group">
                            <label for="phonenumber" style="font-weight: bold">Số điện thoại</label>
                            <input type="text" name="phonenumber" id="address" class="form-control"
                                value="{{ Auth::user()->phonenumber }}">
                        </div>
                        <div class="form-group">
                            <label for="address" style="font-weight: bold">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ Auth::user()->address }}">
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-info btn-sm" value="Cập Nhật">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        @if(session('sub'))
        <div class="alert alert-success" role="alert">
            {{session('sub')}}
        </div>
        @endif
        <div class="  bg-white border rounded border-info col-sm-10" style="margin-top: 70px;">
            <div class="table-info-client">
                <div class="panel panel-default">
                    <h3 class="mt-3" style="font-weight: bold; color: #4A235A; text-align: center;">Đổi mật khẩu</h3>

                    <div class="row">

                        <div class="col-sm-10 mt-3">
                            <form class="form-horizontal row-border" style="width: 110%;margin-left: 20px;"
                                action="{{route('password.update')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-4 control-label"
                                        style="border: none;font-weight: bold; color: #4A235A;">Mật Khẩu Cũ</label>
                                    <div class="col-md-12">
                                        <input id="oldpassword" type="password" name="oldpassword"
                                            class="form-control-mn1" name="oldpassword" required style="width: 100%;">
                                        <a class="btnPassword1"
                                            style="position: absolute;top:14%;right: 30px;color:#333;"><i
                                                class="fa fa-eye"></i></a>
                                        @if($errors->has('oldpassword'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{$errors->first('oldpassword')}}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"
                                        style="border: none;font-weight: bold; color: #4A235A;">Mật Khẩu Mới</label>
                                    <div class="col-md-12">
                                        <input id="password" type="password" name="password" class="form-control-mn2"
                                            required style="width: 100%;">
                                        <a class="btnPassword2"
                                            style="position: absolute;top:14%;right: 30px;color:#333;"><i
                                                class="fa fa-eye"></i></a>
                                        @if($errors->has('password'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{$errors->first('password')}}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label"
                                        style="border: none;font-weight: bold; color: #4A235A;">Nhập Lại Mật
                                        Khẩu</label>
                                    <div class="col-md-12">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control-mn3" style="width: 100%;">
                                        <a class="btnPassword3"
                                            style="position: absolute;top:14%;right: 30px;color:#333;"><i
                                                class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-sm" style="margin: 0px 15px 30px;">Đổi
                                    Mật Khẩu</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
