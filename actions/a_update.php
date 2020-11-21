<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['name'];
   $type = $_POST['type'];
   $age = $_POST[ 'age'];
   $id = $_POST['animal_id'];
   $description = $_POST['$description'];
   $picture = $_POST['picture'];
   $location = $_POST['location'];

   $sql = "UPDATE animals SET name = '$name', type = '$type', age = '$age', image = '$picture', location = '$location' WHERE animal_id = {$id}";
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../home.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 