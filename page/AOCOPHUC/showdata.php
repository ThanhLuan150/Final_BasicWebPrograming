<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
            height: 150px;
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
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LISTPRODUCT";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM LISTPRODUCT;";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            ?>
                    <div class="row">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="col-lg-3">
                                <div class="trainer-item">

                                    <div class="image-thumb">
                                        <img src="<?php echo $row["img"]; ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <?php echo $row["names"]; ?></h4>
                                        <?php echo $row["price"]; ?></h4>
                                        <ul class="social-icons">
                                            <li><a href="detail.php?id=<?php echo $row["id"];?>">+ Details</a></li>  
                                            <li><a href="orders.php?id=<?php echo $row["id"];?>">+ Order</a></li>
                                        </ul>
                                    </div>
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