<?php
sleep(2);
if(!empty($_POST["status"]) && !empty($_POST["data"])){
  if ($_POST["status"] == "validate") {
    if($_POST["data"]["email"] == "hector" && $_POST["data"]["password"] == "senha"){
      echo json_encode(true);
    }else{
      echo json_encode(false);
    }
  }
}
 ?>
