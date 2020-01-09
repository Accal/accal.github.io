<?php

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Please enter a valid username to continue");
  }
  if (empty($password)) {
  	array_push($errors, "Please enter a valid password to continue");
  }

  if (count($errors) == 0) {
  	$password = sha1($password);
  	$user_login_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $user_login_query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Congratulations, you have successfully logged in";
  	  header('location: ../index.php');
  	} else {
  		array_push($errors, "Your username and password don't match. Please try again.");
  	}
  }
}

?>
