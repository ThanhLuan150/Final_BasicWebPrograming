<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/home.css">
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
    .background{
    background: #EFEFEF;
    }

    .title{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
        color: #000000;
        }

    .list_schools{
            display: grid ;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap:30px;
            list-style-type:none;
    }
    .item{
        background: #fff;
        border-radius: 10px 10px 10px 10px;
    }
</style>
<body>
    <div class="header">
        <div class="image">
            <img class="img" src="./img/logo.jpg" alt="">
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
            <button class="button"><a  href="signin.php">Đăng nhập</a></button>
            <button class="button"><a  href="signin.php">Đăng ký</a></button>
        </div>
    </div>
    <div class="body">
        <div class="poster">
            <img class="img1" src="./img/poster.jpg" alt="">
        </div>
        <div class="introduce">
            <div class="container">
                <p class="introducep1">Giới thiệu</p>
                <p class="introductp2">ÁO CỔ PHỤC TTDVL KINH THÀNH HUẾ  DỊCH VỤ THUÊ ÁO  GIÁ RẺ CHẤT LƯỢNG</p>
                <p class="inteoductp3">Giúp cho vẻ đẹp  của bạn muôn phần đẹp hơn</p>
                <div class="introductcontent">
                    <div class="content">
                        <p class="introductcontentp">Bạn hãy chọn cho mình những bộ cổ phục đẹp nhất, độc đáo nhất với giá thành hợp lý nhất và có những bức ảnh đẹp tôn lên vẻ đẹp dân tộc , cổ kỉnh , uy nguy  bằng cách trao cho áo cổ phục TTDVL cơ hội thực hiện mong muốn của bạn!</p>
                        <p class="introductcontentp">Vài năm trở lại đây, ngày càng có nhiều bạn trẻ quan tâm đến văn hóa truyền thống như lịch sử triều đại, nghi lễ thưởng trà theo cung đình xưa, ý nghĩa của các biểu tượng văn hóa cổ…, khoát lên mình bộ cổ phục uy nguy , tráng lệ tôn vinh thêm vẻ đẹp của cổ kính của bộ đồ.</p>
                        <p class="introductcontentp">Áo cổ phục là một nét đẹp văn hóa truyền thống, lịch sử triều đại, nghi lễ thưởng trà theo cung đình xưa, ý nghĩa của các biểu tượng văn hóa cổ. Thường suất hiện trong hoàng cung, dân ta thường sử dụng áo cổ phục  làm trang phục chính để thực hiện các nghi lễ quan trọng.</p>
                        <div class="icon">
                           <a class="a" href="https://www.facebook.com/lethanhluan150503"> <i class="fa-brands fa-facebook"></i></a>
                           <a class="a" href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-youtube"></i></a>
                           <a  class="a"href="https://www.instagram.com/lu_an8934/"><i class="fa-brands fa-instagram"></i></a>
                           <a class="a" href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-twitter"></i></a>
                           <a class="a"href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <img class="img2" src="./img/content.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="inforproduct">
        <div class="container">
            <p class="inforproductp">Dịch Vụ Chính Cổ Phục TTDVL</p>
            <p class="inforproductp1">Địa điểm cho thuê - Bán cổ phục các loại giá rẻ - Uy tín - Chất lượng</p>
            <center>
                <img class="img3" src="../page/img/noidung1.jpg" alt="">
                <button class="inforproducbutton" type="submit"><a  style="color:#fff" href="banggiaphucvu.php">THUÊ CỔ PHỤC</a></button>
            </center>
        </div>
    </div>
    <?php
        $phones = array(
            'Áo giao lĩnh' => array(
                'GL01' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px; border-radius:10px 10px 0 0">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'GL02' => array(
                    'image' => '<img src="../page/img/aogiaolinh2.jpg" style="width:260px;height:290px">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'GL03' => array(
                    'image' => '<img src="../page/img/aogiaolinh3.jpg" style="width:260px;height:290px">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'GL04' => array(
                    'image' => '<img src="../page/img/aogiaolinh4.jpg" style="width:260px;height:290px">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
                'GL05' => array(
                    'image' => '<img src="../page/img/aogiaolinh5.jpg" style="width:260px;height:290px">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB06' => array(
                    'image' => '<img src="../page/img/aogiaolinh6.jpg" style="width:260px;height:290px">',
                    'name' =>'Áo giao lĩnh- tân  niên hoài niệm',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'GL07' => array(
                    'image' => '<img src="../page/img/aogiaolinh7.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'GL08' => array(
                    'image' => '<img src="../page/img/aogiaolinh8.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
            ),
            'Áo giao ' => array(
                'NB01' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB02' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A32',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'NB03' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'NB04' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
                'NB05' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB06' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A32',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'NB07' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'NB08' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
            ),
            'Áo ngũ thân' => array(
                'NB01' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB02' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A32',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'NB03' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'NB04' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
                'NB05' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB06' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A32',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'NB07' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'NB08' => array(
                    'image' => '<img src="../page/img/aogiaolinh1.jpg" style="width:260px;height:290px">',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                )
            ),
         )

    ?>
    <div class="background" >
        <div class="container">
            <?php 
            foreach ($phones as $k => $v) {
                ?>
                    <h2 class="title"><?php echo $k; ?></h2>
                    <ul  class="list_schools">
                        <?php foreach ($v as $k1 => $v1) {
                        ?>
                        <div class="item">
                            <li>
                                <p class="itemp1"><span></span> <?php echo $v1['image'] ?></p>
                                <p class="item2"> <?php echo $v1['name'] ?></p>
                                <p class="itemp1"> <?php echo $v1['price'] ?></p>
                                <p><?php echo $v1['icon'] ?></p>
                            </li>
                        </div>
                        <?php } 
                        ?>
                    </ul>
                    <button>XEM THÊM MẪU HƠN</button>
            <?php
            } 
            ?> 
        </div>
    </div>
</div>
</body>
</html>