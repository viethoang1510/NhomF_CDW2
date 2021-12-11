@extends('pages.customer.dashboard')

@section('content')
<div class="card-body">
                <form method="POST" action="{{route('getPassPost',['id'=>$users->id])}}">
                    @csrf
                    <div class="input-group form-group" style="width: 250px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Nhập mật khẩu mới"
                            name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group form-group"style="width: 250px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password-confirmation" type="password" placeholder="Nhập lại mật khẩu mới"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn login_btn">submit
                           
                        </button>
                    </div>
</div>
</form>
</div>
