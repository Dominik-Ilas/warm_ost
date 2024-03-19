
<?php


   session_start();   //otvorenie session
   echo 1;
   $error = "";
       //kontrola ci uz bol potvrdeny formular a ci boli vyplnene obidva udaje aj username aj password
   if (isset($_POST['login']) && !empty($_POST['username']) 
      && !empty($_POST['password'])) {
        //connect string do DB
        $servername = "localhost";
        $username = "dominko_sk2";
        $password= "Dominik123";
        $dbname = "dominko_sk";
        echo 222222;
        // Create connection
        $conn = new mysqli($servername, $username, "Dominik123", $dbname);
    echo 3;
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        //vyber hesla z DB podla usera, ktory sa prihlasuje
        $sql = "SELECT password FROM t_user where username ='".$_POST['username']."'";
        $result = $conn->query($sql);

        //ak vrati select viac ako 0 riadkov, user existuje
        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();
          if($row["password"]==$_POST['password']) {
           // if(password_verify($_POST['password'],$row["password"])) {
                $_SESSION['valid'] = true; //ulozenie session
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $_POST['username'];
                //presmerovanie na dalsiu stranku
                header("Location: welcome.php", true, 301);
                exit();
          } else {
            $error =  "wrong password";
          }
        } else {
          $error =  "wrong username";
        }
    
    $conn->close();
   
}     
        
   
   //formular            
   echo '<html>';
   echo '<head>';
   echo '<title>Login form</title>';
   echo '</head>';
   echo '<link rel="stylesheet" href="style.css">';
   echo '<body>';
   
 echo '<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>';
 echo '<div class="signin">';
   echo '<form action = "index.php" method = "post">';
   echo '<div class="content">';
 echo '<h2>Sign In</h2>';
 echo '<div class="form">';
 echo '<div class="inputBox">';
   echo '<input type="text" name = "username" required style="width: 300px"> <i>Username</i>';
 echo '</div>';
 echo '<div class="inputBox">';
   echo '<input type="password" name = "password" required style="width: 300px"> <i>Password</i>';
 echo '</div>';

 echo '<div class="links"> '.$error.'</a>';
 echo '</div>';
  
 echo '<div class="inputBox">';
   echo '<input type="submit" name="login" value="Login" style="width: 300px">';
 echo '</div>';
   echo '</form>';
 echo '<div class="links"> <a href="#">Forgot Password</a> <a href="http://localhost/illas3/register.php">Signup</a>';
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</section>';
   echo '</form>';
   echo '</body>';
   echo '</html>';
   
/* echo '';
   echo '<html>';
   echo '';
   echo '<form action = "index.php" method = "post">';
   echo '<input type = "text" name = "username" placeholder = "username" required autofocus></br>';
   echo '<input type = "password" name = "password" placeholder = "password" required></br>';
   echo '<input type = "submit" name="login">';
   echo '</form>';
   echo '</html>';

   style="width: 300px;"
   */
           
?>


