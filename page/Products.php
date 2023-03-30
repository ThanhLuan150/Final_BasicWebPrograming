<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductAodoikham</title>
    <link rel="stylesheet" href="../style/Productaodoikham.css">
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
                <button class="button"><a  href="signin.php">Đăng nhập</a></button>
                <button class="button"><a  href="signin.php">Đăng ký</a></button>
            </div>
        </div>
    </div>
    <div class="phucvu">
        <div class="container">
            <div class="title">
            <p class="titlep1"><i class="fa-solid fa-arrow-left" onclick="javascript:history.go(-1);"></i>  ÁO ĐỐI KHÂM</p>
                <div class="listmenu">
                    <div class="listmenu1">
                        <a  href="aodoikham.php" class="listmenu1p1">ÁO ĐỐI KHÂM</a>
                        <a href="Products.php" class="listmenu1p2">16 sản phâm</a>
                    </div>
                    <div class="listmenu1">
                        <a href="aogiaolinh.php" class="listmenu1p1">ÁO GIAO LĨNH</a>
                        <a href="Products.php" class="listmenu1p2">16 sản phâm</a>
                    </div>
                    <div class="listmenu1">
                        <a href="aonhatbinh.php"class="listmenu1p1">ÁO NHẬT BÌNH</a>
                        <a href="Products.php" class="listmenu1p2">16 sản phâm</a>
                    </div>
                    <div class="listmenu1">
                        <a href="aotac.php" class="listmenu1p1">ÁO TẤC</a>
                        <a href="Products.php" class="listmenu1p2">16 sản phâm</a>
                    </div>
                    <div class="listmenu1">
                        <a  href="aonguthan.php"class="listmenu1p1">ÁO NGŨ THÂN</a>
                        <a href="Products.php" class="listmenu1p2">16 sản phâm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>