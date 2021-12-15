<?php
include "config.php";

// if the form's submit button is clicked, we need to process the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `man`(`firstname`, `lastname`, `mobile`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$mobile','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>
	<style>
	body {
	  background-image: url('img/ashik3.jpg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 100% 100%;
	}
	</style>
<h1 style="color:#0E36E2 ;">Signup Form</h1>


<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <fieldset>
    <h2>Personal information:</h2>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
		Mobile:<br>
		<input type="mobile" name="mobile">
		<br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>
