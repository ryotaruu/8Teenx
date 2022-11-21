<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <title>Home</title>
</head>

<body style="background-image: url('https://i.pinimg.com/564x/68/e9/7e/68e97e86bf6d3e0323c80fe06514052f.jpg');">
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img src="https://res.cloudinary.com/teepublic/image/private/s--jtKxN4Kj--/t_Resized%20Artwork/c_fit,g_north_west,h_954,w_954/co_ffb81c,e_outline:48/co_ffb81c,e_outline:inner_fill:48/co_ffffff,e_outline:48/co_ffffff,e_outline:inner_fill:48/co_bbbbbb,e_outline:3:1000/c_mpad,g_center,h_1260,w_1260/b_rgb:eeeeee/c_limit,f_jpg,h_630,q_90,w_630/v1539273850/production/designs/3302095_0.jpg" height="15" alt="MDB Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Khóa học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Thành viên</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="text-white nav-link">Sự kiện khuyến mại</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
                <div class="d-flex align-items-left" style="margin-right: 20px">
                    <input type="text" style="border-radius: 5px">
                    <span>
                        <button style="border-radius: 5px">Tìm kiếm</button>
                    </span>
                </div>
                <!-- Right elements -->
                <div class="d-flex align-items-center">

                    <!-- Icon -->
                    <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart" style="color: white;"></i>
                    </a>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell" style="color: white;"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Tin tức mới</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Sự kiện mới</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Người đăng ký mới</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Cài đặt</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
<br>
<br>
<footer class="container-fluid text-white">
    <di class="d-flex">
        <img src="https://scontent.fhan15-2.fna.fbcdn.net/v/t39.30808-6/316261487_104622792476812_6803341485897810863_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=-AJjzetYCsAAX9GmNiU&_nc_ht=scontent.fhan15-2.fna&oh=00_AfBL_mBlgSS9C-VlO_Boee6pgezHUE-yOWUC_zJ2VIvFIw&oe=637FBD91" style="max-width: 5%; border-radius: 10px" alt="">
        <div>
            <h2>Liên hệ ngay</h2>
            <p>+84 912318 788231 8</p>
            
        </div>
    </div>
</footer>

</html>