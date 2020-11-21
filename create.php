<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['superadmin' ]) && !isset($_SESSION['admin' ])) {
    
  echo "<h3>Login to access animal-creation!</h3><a  href='login.php?logout'>Sign In</a> <h3>or go back to Menu</h3><a href='index.php'>back</a> "; 

 exit;
}
// select logged-in users details
if(isset($_SESSION['admin'])){
  $res= mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
}else{
  $res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['superadmin']);
};
?>

<!DOCTYPE html>
<html>
  <head>
            <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <title>Animal Management</title>

     <style type= "text/css">
         fieldset {
             margin: auto;
             margin-top: 100px;
             width: 50% ;
         }

         table tr th  {
             padding-top: 20px;
         }

         input{
            padding-top: 13px;
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
  <fieldset >
     <legend>Add Animal</legend>

     <form  action="actions/a_create.php" method= "post">
         <table cellspacing= "0" cellpadding="0">
             <tr>
                 <th>Name</th>
                 <td><input  type="text" name="name"  placeholder="Name" /></td >
             </tr>
             <tr>
                 <th>Type</th>
                 <td><input  type="text" name= "type" placeholder="Small, Large or Senior" /></td>
             </tr>    
             <tr>
                 <th>Age</th>
                 <td><input  type="text" name= "age" placeholder="Age" /></td>
             </tr>
             <tr>
                 <th>Description</th>
                 <td><input type="text"  name="description" placeholder ="Description"/></td>
             </tr>
             <tr>
                 <th>Hobbies</th>
                 <td><input type="text"  name="hobbies" placeholder ="Hobbies"/></td>
             </tr>
             <tr>
                 <th>Picture</th>
                 <td><input type="text"  name="picture" placeholder ="Picture"/></td>
             </tr>
             <tr>
                 <th>Location</th>
                 <td><input type="text"  name="location" placeholder ="Street, City, Zip"/></td>
             </tr>
             <tr>
                 <td><button type ="submit">Add Animal</button></td>
                 <td ><a href= "home.php"><button type="button">Back</button></a></td>
             </tr >
         </table>
     </form>

  </fieldset >

  </body>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>