<?php
    session_start();

    echo "<pre>";
    var_dump($_GET);
    echo "<pre>";

    $regName = $_GET["username"];
    $regPass = $_GET["password"];
    $regConfPass = $_GET["confirmPassword"];

    $registerErrors = array();

    if (strlen($regName) < 4){
        $registerErrors[] = "Invalid username lenght!";
    }

    if ($regPass != $regConfPass) {
        $registerErrors[] = "Password mismatch!";
    }

    if (strlen($regPass) < 5){
        $registerErrors[] = "Invalid password lenght!";
    }

    // if (strcmp($regName) ){
    //     $registerErrors[] = "Invalid password lenght!";
    // }

    if(!isset($_SESSION["registerErrors"])) {
       $_SESSION["registerSuccessful"] = true;
        
    }

    if (count($registerErrors) != 0) {
        unset($_SESSION["registerErrors"]);
        $_SESSION["registerErrors"] = $registerErrors;
        header("Location: register.php");
        die();
    } else {
        $servername = "localhost";
        $dbusername = "root";
        $dbPassword = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=explore_greece", $dbusername, $dbPassword);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO users (user,password) VALUES (?,?)";

            $stmt= $conn->prepare($sql);
            $stmt->execute([$regName, $regPass]);
            header("Location: register.php");
            die();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } 
?>