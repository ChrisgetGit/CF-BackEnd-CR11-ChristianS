<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['name'];
   $type = $_POST['type'];
   $age = $_POST[ 'age'];
   $description = $_POST ['description'];
   $hobbies = $_POST[ 'hobbies'];
   $picture = $_POST[ 'picture'];
   $location = $_POST['location'];

   $sql = "INSERT INTO animals (name, description, type, age,  image, hobbies, location) VALUES ('$name', '$description', '$type', '$age', '$picture','$hobbies', '$location')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?> 