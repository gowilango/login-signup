<?php

   $link = mysqli_connect(" " /* domain (example : igowtham.com) */ , " " /* database username */ , " " /*database password */, " " /* database name */);
   
       if (mysqli_connect_error())
   {
           die ("Database Connection Error");
       }
   ?>
