<?php 
ob_start();
session_start();
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM users WHERE user_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();
}
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
       .logout:hover{
          background-color: red;
          color: white!important;
         }
       .logout{
          color: red!important;
         }
   </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Animals</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">All Animals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="general.php">General</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="senior.php">Senior</a>
      </li>
      <?php 
        if (isset($_SESSION['admin'])){
          echo '<li class="nav-item">
                  <a class="nav-link" href="create.php">Animal Mangement</a>
                </li>';
        }
       ?>
      <li class="nav-item">
         <a class="nav-link logout" href="logout.php?logout">Log-out</a>
    </ul>
  </div>
</nav>
<fieldset>
   <legend>Update User</legend>

   <form action="actions/a_userupdate.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Name</th>
               <td><input type="text"  name="name" placeholder ="First Name" value="<?php echo $data['userName'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Email</th>
               <td><input type= "text" name="type"  placeholder="Last Name" value ="<?php echo $data['email'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "animal_id" value= "<?php echo $data['animal_id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "home.php"><button  type="button" >Back</button ></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
ob_end_flush();
?> 