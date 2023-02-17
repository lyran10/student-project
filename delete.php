<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <form class="container" action="" method="POST">

  <?php
include 'connection.php';

  $deleteid = $_GET['id'];

  $updatequery = "DELETE FROM `student` WHERE id='$deleteid'" ;

  $res = mysqli_query($con,$updatequery);

  if($res){
    ?>
    <script>
      alert("data deleted successfully")
    </script>
    <?php
    header("Location: http://localhost/project/index.php");
  }else{
    ?>
    <script>
      alert("data deleted successfully")
    </script>
    <?php
  }
?>
    <div class="box1">
      <input class="input" id="first_name" name="first_name" placeholder="First Name" type="text">
      <input class="input" id="last_name" name="last_name" placeholder="Last Name" type="text">
    </div>
    <div class="box2">
      <input class="input" id="email" name="email" placeholder="Email" type="email" >
      <div class="innerBox">
        <input class="input" id="class" name="class" placeholder="Class" type="text" >>
        <input class="input" id="roll_no" name="roll_no" placeholder="Roll no" type="text" >
      </div>
    </div>
    <input type="submit" name="submit" class="button" value="submit"/>
  </form>
  <div class="table">
   <div>
    <?php
    include 'display.php'
    ?>
   </div>
   <?php
  
  ?>
  </div>
</body>
</html>