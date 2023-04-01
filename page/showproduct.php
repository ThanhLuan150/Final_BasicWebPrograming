<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        img {
            Width:400px;
        Height:290px;
        border-radius: 10px 10px 0 0 ;;
        }
        
    .list_blogs{
            display: grid ;
            grid-template-columns: 1fr 1fr 1fr ;
            gap:30px;
            list-style-type:none;
            margin-left:10%;
    }
    .item{
        background: #fff;
        border-radius: 10px 10px 10px ;
    }
    .cardname{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        text-align:center;
        line-height: 19px;
        color: #000000;
        margin-left: 13px;
    }
    .description{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #ED2353;
        margin-left: 13px;
    }
    .background{
    background: #EFEFEF;
    padding-bottom: 30px;
    width:80%;
    }
    .backgroundp1{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;

    color: #000000;
    }
    #btn{
        margin-left:40%;
        padding-right: 10px;
    padding-left: 10px;
        background-color:red;
       border:none;
       font-size: 100%;
       text-align: center;
        color: #fff;
        line-height: 25px;
    }
        

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Product</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>      
    <section class="background" id="trainers">
        <div class="container">
            <br>
            <br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blog";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM showcard;";
            $result = $mysqli->query($sql) ?>
 
           <?php if ($result->num_rows > 0) {
                // output data of each row
            ?>
            
            <div class="list_blogs">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="image">
                                    <img class="img" src="<?php echo $row["img"]; ?>" alt="">
                                </div>
                                <br>
                                <button id="btn"  >Blog</button>
                                <div class="informationproduct">
                                    <h2 class="cardname"><?php echo $row["cardname"]; ?></h2>
                                    <p class="description"><?php echo $row["description"]; ?></p>
                               
                                </div>
                            </div>
                        <?php  }
                        } else {
                            echo "Không có kết quả để hiển thị ra";
                        }
                        $mysqli->close();
                        ?>
                    </div>

    </section>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>