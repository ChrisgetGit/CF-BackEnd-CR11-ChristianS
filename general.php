<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) && !isset($_SESSION['admin'])&& !isset($_SESSION['superadmin'])  ) {
 header("Location: home.php");
 exit;
}



// select logged-in users details
if(isset($_SESSION['admin'])){
	$res= mysqli_query($connect, "SELECT * FROM users WHERE user_id=".$_SESSION['admin']);
}elseif(isset($_SESSION['superadmin'])){
	$res= mysqli_query($connect, "SELECT * FROM users WHERE user_id=".$_SESSION['superadmin']);
}else{
	$res=mysqli_query($connect, "SELECT * FROM users WHERE user_id=".$_SESSION['user']);
};



$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
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

<title>Welcome - 
	<?php echo $userRow['userName' ];
		if (isset($_SESSION['admin'])){
			echo '(Admin)';
		}				
 	?>
 		
	</title>
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
	      <li class="nav-item">
	         <a class="nav-link logout" href="logout.php?logout">Log-out</a>
	      <?php 
	      	if (isset($_SESSION['admin'])){
	      		echo '<li class="nav-item">
	      		        <a class="nav-link" href="create.php">Animal Mangement</a>
	      		      </li>';
	      	}
	       ?>
	    </ul>
	  </div>
	</nav>

           <H2>Hi <?php echo $userRow['userName' ];
           		if (isset($_SESSION['admin'])){
					echo '(Admin)';
				}
				 ?>
           </H2>
           
 
       
	<h1>General Animals (Small and Large)</h1>
	<div class ="manageMenu">
	   <a href= "create.php"><button type="button" >Add Animal</button></a>
	   <table  border="1" cellspacing= "1" cellpadding="0">
	       <thead>
	           <tr>
	               <th>ID</th>
	               <th>Name</th>
	               <th>Description</th>
	               <th>Hobbies</th>
	               <th>Type</th>
	               <th>Picture</th>               
	               <th>Location</th>  
	               <?php 
	               if(isset($_SESSION['admin'])){
						echo "<th>Change</th>";}
	                ?>

	               

	           </tr>
	       </thead>
	       <tbody>

	            <?php
	           $sql = "SELECT * FROM animals WHERE type = 'Small' OR type ='Large'";
	           $result = $connect->query($sql);

	            if($result->num_rows > 0) {
	                while($row = $result->fetch_assoc()) {
	                   echo  "<tr>
	                       <td>" .$row['animal_id']."
	                       <td>" .$row['name']."
	                       </td>
	                       <td>" .$row['description']."
	                       </td>
	                       <td>" .$row['hobbies']."</td>
	                       <td>" .$row['type']."</td>
	                       <td> <img src=".$row['image']." alt='meal- picture' border=3 height=100 width=100></img></td>
	                        <td>" .$row['location']."</td>
	                       <td>";
	                       if (isset($_SESSION['admin'])){
					      		echo "

	                           <a href='update.php?id=" .$row['animal_id']."'><button type='button'>Edit</button></a>
	                           <a href='delete.php?id=" .$row['animal_id']."'><button type='button'>Delete</button></a>
	                       </td>";}
	                   "</tr>";
	               }
	           } else  {
	               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
	           }
	            ?>

	           
	       </tbody>
	   </table>
	</div>

</body>
</html>
<?php ob_end_flush(); ?>