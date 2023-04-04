<?php
session_start();
?>
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
    
        <div class="container py-4">


            <header class="pb-3 mb-4 border-bottom">
              <a href="index.html" class="d-flex align-items-center text-dark text-decoration-none">
                <img height="50px" width="50px" src="images/Icon.png" alt="Greece coat of arms" style="margin-right:1%;">
                <span class="fs-4">Explore Greece</span>
              </a>
            </header>
        
            <main class="form-signin w-50 m-auto">
                <form action="regConfirm.php" method="get">
                  <h1 class="h3 mb-3 fw-normal">Please Sign-up Here</h1>
              
                  <div class="form-floating">
                    <input autocomplete="off" type="text" class="form-control mb-4"  name="username" placeholder="username example">
                    <label for="floatingInput">Username</label>
                  </div>
  
                  <div class="form-floating">
                    <input type="password" class="form-control mb-4"  name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control"  name="confirmPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm password</label>
                  </div>
                  <div class="form-floating mb-4">
                    <a href="login.php">Already have an account? Click here.</a>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign-up</button>
                  <p class="mt-5 mb-3 text-muted">&copy; Explore Greece</p>
                </form>
              </main>
              
              <?php
                if(isset($_SESSION["registerErrors"])) {
                    for($i = 0; $i < count($_SESSION["registerErrors"]); $i++) {
                        $currentError = $_SESSION["registerErrors"][$i];
                        echo "<p style='color: red'>" . $currentError . "</p>";
                    }
                    
                }

                if(isset($_SESSION["registerSuccessful"])){
                  echo "<p style='color: green'>Register successful!</p>";
                }

                unset($_SESSION["registerErrors"]);
                unset($_SESSION["registerSuccessful"]);
            ?>
              

        </div>

        
        

    
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