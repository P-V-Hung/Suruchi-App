<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <link rel="canonical" href="{{ url()->current() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
</head>

<body>
    <div class="container position__relative">
        <h1 class="alert alert-success">Trang demo website</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 border position-sticky" style="top: 0;z-index: 1000">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{route('home')}}">Trang web</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mục lục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" onclick="scollDemo(event,'#register')" href="#">Đăng kí</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#login')" href="#">Đăng nhập</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#verify')" href="#">Gửi lại mail xác nhận</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#forgot')" href="#">Quên mật khẩu</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#profile')" href="#">Cập nhật thông tin</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#search-filter-products')" href="#">Tìm kiếm và lọc sản phẩm</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#detail-product')" href="#">Chi tiết sản phẩm</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#share-facebook')" href="#">Chia sẻ facebook</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-categories')" href="#">Quản lý danh mục</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#order')" href="#">Mua hàng</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#comment')" href="#">Bình luận</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-products-filter')" href="#">Quản lý sản phẩm - Lọc</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-products-insert')" href="#">Quản lý sản phẩm - Thêm</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-products-update')" href="#">Quản lý sản phẩm - Sửa</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-products-categories')" href="#">Quản lý sản phẩm - Sửa danh mục</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-orders')" href="#">Quản lý đơn hàng</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-feeships')" href="#">Quản lý phí vận chuyển</a>
                            <a class="dropdown-item" onclick="scollDemo(event,'#admin-giftcodes')" href="#">Quản lý mã giảm giá</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="videos">

            <div id="login" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chức năng đăng nhập</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/login.mp4')}}"></video>
                </div>
            </div>

            <div id="register" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chức năng đăng kí</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/register.mp4')}}"></video>
                </div>
            </div>

            <div id="verify" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chức năng gửi lại mail xác nhận</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/verify.mp4')}}"></video>
                </div>
            </div>

            <div id="forgot" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chức năng quên mật khẩu</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/forgot.mp4')}}"></video>
                </div>
            </div>

            <div id="profile" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Cập nhật thông tin</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/profile.mp4')}}"></video>
                </div>
            </div>

            <div id="search-filter-products" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Tìm kiếm và lọc sản phẩm</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/search-filter-products.mp4')}}"></video>
                </div>
            </div>

            <div id="detail-product" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chi tiết sản phẩm</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/detail-product.mp4')}}"></video>
                </div>
            </div>

            <div id="share-facebook" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Chia sẻ facebook</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/share-facebook.mp4')}}"></video>
                </div>
            </div>

            <div id="order" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Mua hàng</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/order.mp4')}}"></video>
                </div>
            </div>

            <div id="comment" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Bình luận</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/comment.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-categories" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý danh mục</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-categories.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-products-filter" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý sản phẩm (Lọc)</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-products-filter.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-products-insert" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý sản phẩm (Thêm)</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-products-insert.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-products-update" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý sản phẩm (Sửa)</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-products-update.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-products-categories" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý sản phẩm (Sửa danh mục)</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-products-categories.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-orders" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý đơn hàng</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-orders.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-giftcodes" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý mã giảm giá</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-giftcodes.mp4')}}"></video>
                </div>
            </div>

            <div id="admin-feeships" class="video border border-dark rounded pb-2 mb-4">
                <h4 class="alert text-center">Quản lý phí vận chuyển</h4>
                <div class="cart row">
                    <video class="col-10 col-lg-9 border m-auto" controls src="{{asset('assets/demo/admin-feeships.mp4')}}"></video>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        function scollDemo(e,id){
        e.preventDefault();
            let target = document.querySelector(id);
            if (target) {
                var offsetTop = target.getBoundingClientRect().top + window.pageYOffset;
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth"
                });
            }
        }
    </script>
</body>
</html>

