<?php

$errors = array(); 
$email    = "";
$username = "";

if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_confirmation = mysqli_real_escape_string($db, $_POST['password_confirmation']);

  if (empty($username)) { array_push($errors, "Please enter a username"); }
  if (empty($email)) { array_push($errors, "Please enter an email"); }
  if (empty($password)) { array_push($errors, "You have not entered a password"); }
  if ($password != $password_confirmation) {
	array_push($errors, "Your confirmation doesn't match the entered password, please try again");
  }

  $query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "We're sorry, but that username has already been taken");
    }

    if ($user['email'] === $email) {
      array_push($errors, "We're sorry, but a user with that email has already been registered");
    }
  }

  if (count($errors) == 0) {
  	$encrypted_password = sha1($password);

  	$store_query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$encrypted_password')";
  	mysqli_query($db, $store_query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Congratulations, you have successfully logged in!";
  	header('location: ../index.php');
  }
}

?>
