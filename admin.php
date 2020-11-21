<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if(!isset($_SESSION['superadmin']) ) {
 header("no permission for user-mgmnt");
 exit;
}



// select logged-in users details
if(isset($_SESSION['superadmin'])){
	$res= mysqli_query($connect, "SELECT * FROM users WHERE user_id=".$_SESSION['superadmin']);
};



$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!doctype html>
<html>

<head>

	  <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      

      <style type= "text/css">
      	 .logout:hover{
      	 	background-color: red;
      	 	color: white!important;
      	 }
         .logout{
            color: red!important;
         }
      </style>
	<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link logout" href="logout.php?logout">Log-out</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="admin.php">User Management</a>
      </li>
    </ul>
  </div>
</nav>



	   <table  border="1" cellspacing= "1" cellpadding="0">
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>E-mail</th>
      <th>Change</th>
		</thead>
		<tbody>
		<?php  
		 $sql = "SELECT * FROM users";
	           $result = $connect->query($sql);

	            if($result->num_rows > 0) {
	                while($row = $result->fetch_assoc()) {
	                   echo  "<tr>
	                   <td>" .$row['user_id']."</td>
	                       <td>" .$row['userName']."
	                       </td>
	                       <td>" .$row['userEmail']."
	                       </td>
                         <td >
                         <a href='userupdate.php?id=" .$row['user_id']."'><button type='button'>Edit</button></a>
                             <a href='userdelete.php?id=" .$row['user_id']."'><button type='button'>Delete</button></a>
                         </td>	                       
	                   </tr>";
	                }
	            }
	  ?>	                   	
	    </tbody>
	   </table>
	</body>
</html>