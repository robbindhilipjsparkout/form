<?php
// Retrieve the form data
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  }
  
  // If there are errors, display them to the user and allow them to correct their input
  if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
  } 
else {
    // Process the form data
    // ...
  }
}
?>

<form method="post">
  <label>Name:</label>
  <input type="text" name="name">
  <br>
  
  <label>Email:</label>
  <input type="text" name="email">
  <br>
  
  <label>Password:</label>
  <input type="password" name="password">
  <br>
  
  <input type="submit" value="Submit">
</form>
