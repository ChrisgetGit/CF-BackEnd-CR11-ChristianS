<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['animal_id'];

   $sql = "DELETE FROM animals WHERE animal_id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../home.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
