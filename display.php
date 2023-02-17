<?php
include 'connection.php';

$rowClasses = "row";
$buttons = "buttons";
$buttonStyle = "buttonStyle";

 $selecyquery = " select * from student ";

 $query = mysqli_query($con,$selecyquery);

 $num = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
  {
  ?>
  <div class='row'>
  <span><?php echo $res["first_name"];?></span>
  <span><?php echo $res["last_name"];?></span>
  <span><?php echo $res["email"];?></span>
  <span><?php echo $res["roll_no"];?></span>
  <span><?php echo $res["class"];?></span>
  <span class='buttons'>
  <a href="edit.php?id=<?php echo $res["id"];?>" class='buttonStyle'>Edit</a>
  <a href="delete.php?id=<?php echo $res["id"];?>" class='buttonStyle'>Delete</a>
  </span>
</div>
  <?php
  }
}
?>