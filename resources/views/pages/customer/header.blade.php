<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <a href="#" style="padding-right:15px;padin">Giới thiệu</a>
        <a href="#">Liên hệ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <select class="form-control m-bot12" name="category" style="width: 9em;margin-left: 20px">
            <option>Danh mục</option>
            @foreach ($listCat as $category)
            <option value="{{ $category->id }}">{{data_get($category,'category_name')}}
            </option>
            @endforeach
        </select>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav mr-auto">
                <form class="s" style=" padding-left: 10%;display: flex;">
                    <input type="search" class="sb" name="q" autocomplete="off"
                        style="border: 2px solid gainsboro;border-radius: 20px 20px;" />
                    <i class="sbtn fa fa-search" style="margin-top: 8px;margin-left: -28px;"></i>
                </form>


        </div>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
           
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if(Auth::check() && Auth::user()->role == 1)
                    <a class="dropdown-item" href="{{route('admin.show')}}">
                        <i class='fas fa-database'></i>
                        Trang quản trị
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{route('admin.detailuser')}}">
                        <i class="fas fa-user"></i>
                        Thông tin tài khoản

                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class='fas fa-sign-in-alt'></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    </div>

</nav>