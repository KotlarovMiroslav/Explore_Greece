<?php
    session_start();

    echo "<pre>";
    var_dump($_GET);
    echo "<pre>";

    $logUser = $_GET["username"];
    $logPass = $_GET["password"];

    echo "<pre>";
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=explore_greece",$username,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $PDOstatement = $connection->prepare("SELECT * FROM users");
        $PDOstatement -> execute();

        $PDOstatement -> setFetchMode(PDO::FETCH_ASSOC);
        $data = $PDOstatement -> fetchAll();

        for($i = 0; $i < count($data); $i++){
            $currentRow = $data[$i];
            $user = $currentRow["user"];
            $password = $currentRow["password"];

            if ($logUser == $user && $logPass == $password) {
                unset($_SESSION["loginSuccess"]);
                $_SESSION["loginSuccess"] = "loginSuccess";
                unset($_SESSION["username"]);
                $_SESSION["username"] = $user;
                header("Location: reviews.php");
                die();
            }
        }

    } catch(PDOException $e) {
        echo "Connection failed: ". $e -> getMessAge();
    }

    unset($_SESSION["loginError"]);
    $_SESSION["loginError"] = "loginError";
    header("Location: login.php");
?>