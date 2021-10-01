<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
</head>
<body>


<div class="container">
<h2>Registration Form</h2>
  <form method="POST" action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mname">Middle Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="mname" name="middlename" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="contact">Contact</label>
      </div>
      <div class="col-75">
		<input type="text" id="contact" name="contact" required>
	  </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
		<input type="password" id="password" name="password" required>
	  </div>
    </div>
    <div class="row">
      <input type="submit" name="register" value="Submit">
    </div>
  </form>
</div>

</body>
</html>

<?php 
			
			if(isset($_POST['register']))
            {
				$fname = $_POST['firstname'];
				$mname = $_POST['middlename'];
				$lname = $_POST['lastname'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$password = $_POST['password'];
				
				echo("First Name : ".$fname."<br> Middle Name : ".$mname."<br> Last Name : ".$lname."<br> Email Id : ".$email."<br> Contact : ".$contact."<br> Your Password : ".$password);
			
			}
?>
