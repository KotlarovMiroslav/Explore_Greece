<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Greece</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- /node_modules/bootstrap/dist/css/bootstrap-grid.css -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    <!-- /css/main.css -->
    <link rel="stylesheet" href="css/main.css">
    

    <!-- <style>
      p{
        font-size: 22px;
      }
    </style> -->
</head>
<body>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
              <a href="index.html" class="d-flex align-items-center text-dark text-decoration-none">
                <img height="50px" width="50px" src="images/Icon.png" alt="Greece coat of arms" style="margin-right:1%;">
                
                <span class="fs-4">Explore Greece</span>
              </a>
            </header>
        
            <div class="p-5 mb-4 bg-dark rounded-3">
              <div class="container-fluid bg-light rounded-3 py-5 px-5">
                <h1 class="display-5 fw-bold">Learn about Santorini's dishes</h1>
                <p class="col-md-8 fs-4">Santorini offeres and array of differend dishes that are well known all around Greece - from salads to desserts. The choice is yours! Enjoy!</p>
              </div>
            </div>

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

              $sql = "SELECT * FROM dishes";
              $result = $conn->query($sql);
              $rowCounter = -1;
              $counter = 0;

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $counter++;
                  
                  $rowCounter++;
                  if($rowCounter == 0){
                    echo "<div class='row row-cols-1 row-cols-md-2 align-items-stretch g-4 py-5'>";
                  }
                  echo "
                  <div class='col'>
                
                    <div id='dishes-img' class='card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg' style = 'background-image:linear-gradient(rgba(26, 44, 88, 0.527),rgba(26, 44, 88, 0.5)), url(". $row["img"] .");background-size: cover;'>
                      <div class='d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1'>
                        <h2 class='pt-5 mt-5 mb-4 display-6 lh-1 fw-bold'>". $row["name"] ."</h2>
                        <p>". $row["desc"] ."</p>
                        
                        <ul class='d-flex list-unstyled mt-auto'>
                        </ul>
                      </div>
                    
                    </div>
                  </div>";


                  if($rowCounter == 1 || $result->num_rows == $counter){
                    echo "</div>";
                    $rowCounter = -1;
                  }
                
                }
              } else {
                echo "0 results";
              }
              $conn->close();
            ?>


                <!-- FINAL MESSAGE -->
                <div class="row align-items-md-stretch mb-4">
                  <div class="col-md-12">
                        <div class="p-5 mb-4 bg-dark rounded-3">
                            <div class="h-100 p-5 text-black bg-light rounded-3">
                                <h2>See more greek food recepies</h2>
                                <p>If you want to see even more from the Greek kitchen feel free to check this site.</p>
                                <button class="btn btn-outline-dark btn-lg px-4 btn-text-dark" type="button"><a href="https://www.aheadofthyme.com/30-best-greek-recipes/" target="_blank">Check out site</a></button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="p-5 mb-4 bgr-miroze rounded-3">
                            <div class="h-100 p-5 bg-light border rounded-3">
                            <h2>Add borders</h2>
                            <p>ee</p>
                            <button class="btn btn-outline-dark" type="button">Example button</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            <!-- FOOTER -->
            <footer class="pt-3 mt-4 text-muted border-top">
              <a style="color: #4072BD; text-decoration: none;" class="justify-content-center border-bottom pb-3 mb-3" href="index.html"> <img height="50px" width="50px" src="images/Icon.png" alt="Greece Icon"> Explore Greece</a> &copy; 2022


              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Go up</a></li>
              </ul>
            </footer>
          </div>
    </main>


    <!-- <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
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