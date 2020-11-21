<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM animals WHERE animal_id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Animal</title>
</head>
<body>

<h3>Do you really want to delete this Animal?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "animal_id" value="<?php echo $data['animal_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="home.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>
