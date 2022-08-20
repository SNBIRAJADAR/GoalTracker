<?php
require_once 'connect.php';

$id = $_REQUEST['id'];

$sql = "UPDATE goals SET goal_complete = '1' WHERE goal_id = '" . $id . "'";
if($sql){
  print("Your Goal is now completed!");
}
if(mysqli_query($link, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";


?>
