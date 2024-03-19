<?php
$servername = "localhost";
$username = "dominko_sk2";
$password = "Dominik123";
$dbname = "dominko_sk";

// Create connection
$conn = new mysqli($servername, $username, 
    $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $meno = $_POST['username'];
    $heslo = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO t_user (username, password, email)
    VALUES ('$meno', '$heslo', '$email')";


    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();




echo '<html>';
   echo '<head>';
   echo '<title>Login form</title>';
   echo '</head>';
   echo '<link rel="stylesheet" href="style.css">';
   echo '<body>';
   
 echo '<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>';
 echo '<div class="signin">';
   echo '<form action = "register.php" method = "post">';
   echo '<div class="content">';
 echo '<h2>Sign In</h2>';
 echo '<div class="form">';
 echo '<div class="inputBox">';
   echo '<input type="text" name = "username" required style="width: 300px"> <i>Username</i>';
 echo '</div>';

 echo '<div class="inputBox">';
   echo '<input type="password" name = "password" required style="width: 300px"> <i>Password</i>';
 echo '</div>';

 echo '<div class="inputBox">';
   echo '<input type="password" name = "password_again" required style="width: 300px"> <i>Confirm password</i>';
 echo '</div>';

  echo '<div class="inputBox">';
   echo '<input type="text" name = "email" required style="width: 300px"> <i>Email</i>';
 echo '</div>';
  
 echo '<div class="inputBox">';
   echo '<input type="submit" name="signin" value="SignIn" style="width: 300px;">';
 echo '</div>';
   echo '</form>';
 echo '<div class="links"> <a href="#">Forgot Password</a> <a href="http://localhost/illas3/index.php">Login</a>';
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</section>';
   echo '</form>';
   echo '</body>';
   echo '</html>';
?>
