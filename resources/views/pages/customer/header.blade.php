<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <a href="#" style="padding-right:15px;padin">Giới thiệu</a>
        <a href="#">Liên hệ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                    <input type="search" class="sb" name="q" autocomplete="off" style="border: 2px solid gainsboro;border-radius: 20px 20px;" />
                    <i class="sbtn fa fa-search" style="margin-top: 8px;margin-left: -28px;"></i>
                </form>


        </div>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item cart-icon">

                <a class="nav-link btn btn-success" href="{{ url('List-Carts') }}"><i class="fas fa-cart-arrow-down"></i> <b>Giỏ hàng</b>
                    @if (Session::has("Cart") != null)
                    <span style="width: 25px;" id="total-quanty-show" class="badge badge-success ml-3">{{ Session::get("Cart")->totalQuanty }}</span>
                    @else
                    <span style="width: 25px;" id="total-quanty-show" class="badge badge-success ml-3">0</span>
                    @endif
                </a>
                <div class="cart-hover">
                    <div id="change-item-cart">
                        @if (Session::has("Cart") != null)
                        <div class="select-items">
                            <table>
                                <tbody>
                                    @foreach(Session::get('Cart')->products as $item)
                                    <tr>
                                        <td class="si-pic"><img src="public/upload/{{ $item['productInfo']->productImage }}" style="vertical-align: middle;  width:80px;margin-right: 30px" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <b>{{ number_format($item['productInfo']->listPrice) }}₫ x {{ $item['quanty'] }}</b>
                                                <h6>{{ $item['productInfo']->productName }}</h6>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <h4><a class="" data-id="{{ $item['productInfo']->productID }}" role="button"><i class="far fa-times"></i></a></h4>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="select-total">
                            <h6>TỔNG TIỀN:</h6>
                            <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
                        </div>
                        <div class="select-button">
                            <a href="{{ url('List-Carts') }}" class="primary-btn view-card"> <b>XEM GIỎ HÀNG</b> </a>
                            <a href="#" class="primary-btn checkout-btn"><b>THANH TOÁN</b></a>
                        </div>
                        @else

                        @endif
                    </div>

                </div>
            </li>
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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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