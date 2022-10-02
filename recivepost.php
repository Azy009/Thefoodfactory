<?php

if(isset($_FILES['images'])){
    $name = $_FILES['images']['name'];
    $mtem = $_FILES['images']['tmp_name'];
    $size = $_FILES['images']['size'];
    $type = $_FILES['images']['type'];


        move_uploaded_file($mtem,"postuploding/".$name);


    
}
 
  $username = $_POST['USERNAME'];
  $title = $_POST['title'];
  $address = $_POST['ADDRESS'];
  $select = $_POST['select'];
  $desc = $_POST['description'];
  $date = date('d M,Y');


  $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

  $sql = "INSERT INTO posts(pusername,title,paddress,pselect,pdescription,pdate,img) VALUES('{$username}','{$title}','{$address}','{$select}','{$desc}','{$date}','{$name}')";

  if(mysqli_query($conn,$sql) or die("query failed")){

    header("Location: front.php");
}

mysqli_close($conn);





?>