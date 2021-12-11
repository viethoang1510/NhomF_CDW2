<div style = "width:600px;margin: 0 auto">
    <div style="text-align: center">
    <h1> xin chao {{$users->name}} </h1>
    <p>Vui Long Nhan Vao Lien Ket Sau De Dat Lai Mat Khau</p>
    <p>
    <a href ="{{route('getPass',['users'=> $users->id,'remember_token'=>$users->token])}}">Nhấn Vào Đây Để Lấy Lại Mật Khẩu</a>

    </p>
</div>
</div>  