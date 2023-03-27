<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  $id = $_GET["id"];

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
  ?>
  <!-- ***** Call to Action Start ***** -->
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <?php if ($result->num_rows > 0) {
        // output data of each row
      ?>
        <div class="row">
          <?php while ($row = $result->fetch_assoc()) {
            if ($id == $row["id"]) {
          ?>
              <div class="card" style="width:400px">
                <img class="card-img-top" src="<?php echo $row["img"]; ?>" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $row["names"]; ?></h4>
                  <p class="card-text">
                    <p><?php echo $row["price"]; ?></p>
                  </p>
                  <a href="#" class="btn btn-primary">Đặt thuê</a>
                </div>
              </div>
          <?php break;
            }
          } ?>
        </div>
      <?php }  ?>
    </div>
  </section>
</body>

</html>