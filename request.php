<?php
session_start();
$_SESSION["logged"] = false;
require('db.php'); // Database connection
if(!empty($_POST["status"]) && !empty($_POST["data"])){ // If receiving something

  if ($_POST["status"] == "validate") { // If asking to validate
    $query = $pdo->prepare('SELECT * FROM Users WHERE Name = :n');
    $query->bindValue(":n",$_POST["data"]["email"]);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    sleep(1); // 2 seconds waiting just to see the loading animation

    if(!empty($results)){ // If found any name
      if ($results[0]["Password"] == $_POST["data"]["password"]) { // If passwords match
        $_SESSION["logged"] = true;
        $_SESSION["data"] = $results[0];
        echo json_encode($results[0]);
        exit();
      }
    }
    echo json_encode(false);

  }else if($_POST["status"] == "disconnnect"){
    session_destroy();
  }
}
 ?>
