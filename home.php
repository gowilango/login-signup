<?php
   session_start();
   
   if (array_key_exists("id", $_COOKIE) && $_COOKIE ['id']) 
   {
       $_SESSION['id'] = $_COOKIE['id'];
   }
   
   if (array_key_exists("id", $_SESSION)) 
   {     
     include("connection.php");
   } 
   
   else 
   {
       header("Location: index.php");   
   }
   ?>
   
<title>Home</title>

<?php include("head.php") ?>
<br>
<center><a href ='index.php?logout=1'><button class="btn btn-danger">Logout</button></a></center>
<?php include("foot.php") ?>
