<?php
    session_start();

    echo "<pre>";
    var_dump($_GET);
    var_dump($_SESSION);
    echo "<pre>";

    $review = $_GET["userReview"];
    $user = $_SESSION["username"];

        $servername = "localhost";
        $dbusername = "root";
        $dbPassword = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=explore_greece", $dbusername, $dbPassword);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO reviews (user,review) VALUES (?,?)";

            $stmt= $conn->prepare($sql);
            $stmt->execute([$user, $review]);
            header("Location: reviews.php");
            die();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    
?>