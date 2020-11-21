<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<form id="foo">
   <label for="bar">A bar</label>
   <input id="bar" name="bar" type="text" value="" />

   <input type="submit" value="Send" />
</form>


<script>
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#foo").submit(function(event){

   // Prevent default posting of form - put here to work in case of errors
   event.preventDefault();

   // Abort any pending request
   if (request) {
       request.abort();
   }
   // setup some local variables
   var $form = $(this);

   // Let's select and cache all the fields
   var $inputs = $form.find("input, select, button, textarea");

   // Serialize the data in the form
   var serializedData = $form.serialize();

   // Let's disable the inputs for the duration of the Ajax request.
   // Note: we disable elements AFTER the form data has been serialized.
   // Disabled form elements will not be serialized.
   $inputs.prop("disabled", true);

   // Fire off the request to /form.php
   request = $.ajax({
       url: "form.php",
       type: "post",
       data: serializedData
   });

   // Callback handler that will be called on success
   request.done(function (response, textStatus, jqXHR){
       // Log a message to the console
       console.log("Hooray, it worked!");
   });

   // Callback handler that will be called on failure
   request.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   // Callback handler that will be called regardless
   // if the request failed or succeeded
   request.always(function () {
       // Reenable the inputs
       $inputs.prop("disabled", false);
   });
});




<?php 
// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$bar = isset($_POST['bar']) ? $_POST['bar'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="CR11_christians_petadoption";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query= "INSERT INTO `animals` (name) VALUES ('$bar');";
if(mysqli_query($conn,$query)){
        echo "insert success";
}
?>

</script>
</body>
</html>