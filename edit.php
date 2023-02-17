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

$ids = $_GET['id'];

$showquery = " SELECT * from student where id=$ids ";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST["submit"])){

  $updateid = $_GET['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $class = $_POST['class'];
  $roll_no = $_POST['roll_no'];

  $updatequery = "UPDATE `student` SET `id`='$updateid',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`class`='$class',`roll_no`='$roll_no',`date_time`=current_timestamp() WHERE id='$updateid'" ;

  $res = mysqli_query($con,$updatequery);

  if($res){
    ?>
    <script>
      alert("updated data successfully")
    </script>
    <?php
    header("Location: http://localhost/project/index.php");
    die();
  }else{
    ?>
    <script>
      alert("not updated data successfully")
    </script>
    <?php
  }
}
?>
    <div class="box1">
      <input class="input" id="first_name" name="first_name" placeholder="First Name" type="text" value=<?php echo $arrdata["first_name"];?>>
      <input class="input" id="last_name" name="last_name" placeholder="Last Name" type="text" value=<?php echo $arrdata["last_name"];?>>
    </div>
    <div class="box2">
      <input class="input" id="email" name="email" placeholder="Email" type="email" value=<?php echo $arrdata["email"];?>>
      <div class="innerBox">
        <input class="input" id="class" name="class" placeholder="Class" type="text" value=<?php echo $arrdata["class"];?>>
        <input class="input" id="roll_no" name="roll_no" placeholder="Roll no" type="text" value=<?php echo $arrdata["roll_no"];?>>
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