<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/dangky.css">
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
<style>
    *{
    margin: 0;
    padding:0;
}
.header{
    height: 100px;
    display:grid;
    grid-template-columns:10% 50% 40% ;
    background: #fff;
}
.img{
    height: 100px;
    width: 100px;
    margin-left: 30px;
}
.menu{
    margin-top: 39px;
    margin-bottom: 39px;
}
 .menu ul {
    display: flex;
    flex-direction: row;
    list-style-type: none;
    gap:22px;
}
.menu ul li a{
    text-decoration: none;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height:5px;
    color: #DD3333;
}
.menu ul li a:hover{
    border-bottom: 2px solid #DD3333;
}
.function{
    margin-top: 30px;
    margin-bottom: 39px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    
}
.functionsearch{
    margin-left: 50px;
    margin-top: 10px;
}
.input{
    border-top: none;
    border-left:none;
    border-right: none;
    height: 40px;
    width: 300px;
}

.button{
    width: 100px;
    height: 35px;
    border-radius: 10px;
    background:#F2DFE3;
    color: #DD3333;
    border:1px solid #F2DFE3;
    height: 40px;
}
.button a{ 
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #DD3333;
    text-decoration: none;
    padding-bottom: 5px;
}
.background{
    background: #EFEFEF;
}
.dangky{
    margin-top: 85px;
    margin-bottom: 85px;
    margin-left: 80px;
    height: 600px;
    width: 1000px;
    display:grid;
    background: #FFFFFF;
    border-radius: 30px;
    grid-template-columns: 50% 50%;
}
.dangky1{
    margin-top: 94px;
    margin-bottom: 60px;
    margin-left: 110px;
}
.dangkyp{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 36px;
    line-height: 44px;
    color: #222222;
    margin-left: 15px;
}
.input{
    border-bottom: 1px solid #999999;
    outline: none;
    padding-left: 40px;
    color: #808080;
    width: 300px;
}
.dangkyp2{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 17px;
    color: #000000;
    margin-left: 20px;
}
.checkbox{
    background: #FFFFFF;
    border: 1px solid #808080;
    border-radius: 1px;
}
.button1{
    width: 116px;
    height: 36px;
    background: #F2DFE3;
    border-radius: 20px;
    border: 1px solid #F2DFE3;
    color: #DD3333;
    margin-left: 17px;
}
.img1{
    width: 269.69px;
    height: 280px;
    margin-top: 157px;
    margin-bottom: 126px;
    border-radius: 20px;
}
.imga{
    text-align: end;
    padding-bottom: 87px;
}
.dangkyp3{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 17px;

    color: #000000;
    margin-left: 15px;
}
.footer{
    width: 100%;
    background: #F2DFE3;
    height: 400px;
}
.content{
    display:grid;
    grid-template-columns: 40% 30% 30%;
    padding-top: 72px;
    padding-left: 140px;
    padding-bottom:53px ;
    padding-right: 52px;
}
.content1{ 
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    line-height: 17px;
    color: #333333;
}

</style>
<body>
    <div class="header">
        <div class="image">
            <a href="home.php"><img class="img" src="../img/logo.jpg" alt=""></a>
        </div>
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
                <div class="search">
                    <i  class="fa-sharp fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#myModal"></i>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tìm kiếm</h4>
                                </div>
                                <div class="modal-body">
                                    <input class="input" type="search" name="search" value="" placeholder="Nhập từ khóa">
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
                <button class="button"><a  href="Dangky.php">Đăng ký</a></button>
            </div>
        </div>
    </div>
    <div class="background">
        <div class="container">
            <div class="dangky">
                <div class="dangky1">
                    <form action="dangky.php" method="post">
                        <p class="dangkyp">ĐĂNG NHẬP</p>
                        <br> <br>
                        <div class="name">
                            <i class="fa-solid fa-user" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="" placeholder="Tên đăng nhập" >
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-lock" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="" placeholder=" Mật khẩu">
                        </div> <br> <br>
                        <p class="dangkyp2" ><input type="checkbox">                   Nhớ mật khẩu</p> <br>
                        <button type="submit" class="button1">Đăng nhập</button> <br> <br> <br> <br>
                        <p class="dangkyp3">Hoặc đặng nhập bằng    <i class="fa-brands fa-facebook"></i>        <i class="fa-brands fa-google"></i>        <i class="fa-brands fa-instagram"></i>
                    </form></p> 
                </div>
                <div class="img">
                    <img class="img1" src="../img/content.jpg" alt="">
                    <a class="imga" href="Dangky.php">Tạo tài khoản</a>
                </div>
            </div>
        </div>
    </div>
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