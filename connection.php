<?php

  $server = "localhost";
  $userName = "root";
  $password = "";
  $db = "students";

  $con = mysqli_connect($server,$userName,$password,$db);

  if(!$con){
    die("connection failed : error". mysqli_connect_error());
  }else{
    
    ?>
    <script>
      alert("connected")
    </script>
    <?php
  }
?>

