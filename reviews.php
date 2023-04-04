<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Greece</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <div class="container py-4">


        <?php 
              if(isset($_SESSION["username"])) {
                echo '
                <button style="float: right; margin-left: 1%;" type="button" class="btn btn-outline-primary btn-text-primary"> <a href="#">'. $_SESSION["username"] .'</a> </button>
                <button style="float: right;" type="button" class="btn btn-primary btn-text-color-light"><a href="logout.php">Log Out</a></button>
                ';
                // echo "<a href='#' class='nav-item nav-link'>". $_SESSION["username"] ."</a>";
                // echo "<a href='logout.php' class='nav-item nav-link bg-val-red'>Log Out</a>";
              } else {
                echo '
                <button style="float: right; margin-left: 1%;" type="button" class="btn btn-outline-primary btn-text-primary"> <a href="login.php">Login</a> </button>
                <button style="float: right;" type="button" class="btn btn-primary btn-text-color-light"><a href="register.php">Sign-up</a></button>
                ';
              }
              ?>

            <header class="pb-3 mb-4 border-bottom">
              <a href="index.html" class="d-flex align-items-center text-dark text-decoration-none">
                <img height="50px" width="50px" src="images/Icon.png" alt="Greece coat of arms" style="margin-right:1%;">
                <span class="fs-4">Explore Greece</span>
              </a>
              <div>
                <form action="reviewsCheck.php">
              <button style="display: flex;  margin-left: auto; margin-right: auto;" type="submit" class="btn btn-dark btn-hover-light-text-primary">Add Review</button></form>
              </div>
            </header>
          
            <!-- AUTO GENERATED PART -->

            <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "explore_greece";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM reviews";
              $result = $conn->query($sql);
              $rowCounter = -1;
              $counter = 0;

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '
                  <div class="p-3 mb-4 bg-primary rounded-3">
                  <div class="container-fluid bg-light rounded-3 py-5 px-5">
                    <h1 class="display-5 fw-bold">Review by '. $row["user"] .'</h1>
                    <p class="col-md-8 fs-4">'.$row["review"].'</p>
                  </div>
                  </div>';
                
                }
              } else {
                echo '<div class="p-3 mb-4 bg-primary rounded-3">
                <div class="container-fluid bg-light rounded-3 py-5 px-5">
                  <p class="col-md-8 fs-4">No reviews?! Lets change that!</p>
                </div>
                </div>';
              }
              $conn->close();
            ?>


            
        </div>

    </main>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"
      ></script>
</body>
</html>