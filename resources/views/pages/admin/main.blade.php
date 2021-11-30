<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Trang quản trị </title>

    <link rel="stylesheet" href="{{ asset('public/summernote/summernote-bs4.min.css') }}">
  
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    
    <div class="wrapper">
        <!-- Navbar -->
        <div>
            @include('pages.admin.header')
        </div>
        <!-- /.navbar -->
        <!-- left -->
        <div>
            @include('pages.admin.left')
        </div>

        <div class="content-wrapper">
            <!-- index admin  -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0 text-dark">Home</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số lượng danh mục</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-laptop"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số lượng sản phẩm</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
               
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số lượng đơn hàng</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số lượng User</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- content -->
            <div class="container">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
    <!-- Main Footer -->
    <div>
        @include('pages.admin.footer')
    </div>
    <!-- REQUIRED SCRIPTS -->

</body>

</html>