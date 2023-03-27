<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- phần header -->
    <div class="header">
        <!-- logo -->
        <div class="image">
            <img class="img" src="imge/logo.jpg" alt="">
        </div>
        <!-- menu -->
        <div class="menu">
            <ul>
                <li><a href="banggiaphucvu.php">BẢNG GIÁ PHỤC VỤ</a></li>
                <li><a href="aodoikham.php">ÁO ĐỐI KHÂM</a></li>
                <li><a href="aogiaolinh.php">ÁO GIAO LĨNH</a></li>
                <li><a href="aonhatbinh.php">ÁO NHẬT BÌNH</a></li>
                <li><a href="aotac.php">ÁO TẮC</a></li>
                <li><a href="aonguthan.php">ÁO NGŨ THÂN</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="lienhe.php">LIÊN HỆ</a></li>
            </ul>
        </div>

        <div class="function">
            <div class="functionsearch">
                <!-- tìm kiếm -->
                <div class="search">
                    <i  class="fa-sharp fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#myModal"></i>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tìm kiếm</h4>
                                </div>
                                <div class="modal-body">
                                    <input class="input" type="search" name="search" value="" placeholder="Nhập khóa">
                                    <button class="button" type="submit" name="submit">Tìm kiếm</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button"><a  href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a></button>
            <button class="button"><a  href="signin.php">Đăng nhập</a></button>
            <button class="button"><a  href="signin.php">Đăng ký</a></button>
        </div>
      
      
     </div>
     <div class="clear"></div>
 <!-- phan front -->
     <div class="main">
        <br>
        <center>
     <div class="signup-content">
            <div class="signup-form">
            <h2 class="form-title">Đăng nhập</h2>
            <form method="" class="register-form">
                <div class="form-group">

                    <label for="name"></label>
                    <input class="front-input" type="text" name="name" id="name" placeholder="Tên đăng nhập" >
                    <label for="pass"></label>
                    <input class="front-input" type="password" name="pass" id="pass" placeholder="Mật khẩu" >
                    <div class="chatbox">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                        <label for="remember-me" class="label-agree-term">Nhớ mật khẩu</label>
                    </div>
                           
                    </div>
                    <div class="form-group form-button">
                    <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng nhập">
                </div>

                 <dir>
                    <h6>Hoặc đăng nhập bằng:</h6>
                    <span><a href=""></a></span>
                    <span><a href=""></a></span>
                    <span><a href=""></a></span>
                 </dir>
                </form>
            </div>
            <div class="signup-image">
            <img class="hinanh2" src="./imge/content.jpg" alt="hát lên hình ảnh">
            <a href="#" class="signup-image-link">Tạo tài khản</a>
            </div>
            </div>
            </center>
        </div>
        <!-- phan footer  -->
        <div class="footer">
        <div class="content">
            <div class="content1">
                <p class="content11">ÁO CỔ PHỤC TTDVL</p>
                <p class="content11"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 1: 101b, Lê Hữu Trác , Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content11"><i class="fa-solid fa-phone"></i>   Phone: 0702307677 ( Mr Trung)</p>
                <p class="content11"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 2: 99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content11"><i class="fa-solid fa-phone"></i>   Phone: 0787628654 (Mr Luân)</p>
                <p class="content11"><i class="fa-solid fa-envelope"></i>   Email: aocophucttdvl@gmail.com</p>
                <p class="content11"><i class="fa-regular fa-calendar-pen"></i>   Giờ mở cửa: 8h30 đến 21h30 Từ thứ 2 đến Chủ nhật</p>
            </div>
            <div class="content1">
                <p class="content11">DỊCH VỤ CHỤP ẢNH</p>
                <p class="content11">Bảng giá thuê áo cổ phục</p>
                <p class="content11">Thuê  áo đối khâm</p>
                <p class="content11">Thuê áo giao lĩnh</p>
                <p class="content11">Thuê áo nhật bình</p>
                <p class="content11">Thuê áo tắc</p>
                <p class="content11">Thuê áo ngũ thân</p>
            </div>
            <div class="content1">
                <p class="content11">GIỚI THIỆU</p>
                <p class="content11">Giói thiệu cho thuê áo cổ phục</p>
                <p class="content11">Áo đối khâm</p>
                <p class="content11">Áo giao lĩnh</p>
                <p class="content11">Áo nhật bình</p>
                <p class="content11">Áo tấc</p>
                <p class="content11">Áo ngũ thân</p>
                <p class="Content">Liên hệ</p>
            </div>
        </div>
    </div>
    
</body>
</html>