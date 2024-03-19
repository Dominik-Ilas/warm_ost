<?php
   session_start(); //otvorenie session

   unset($_SESSION["username"]); //vymazanie session
   
   echo 'You have loggout and cleaned session';

   header('Refresh: 2; URL = index.php'); // presmerovanie na prihlasenie
?>