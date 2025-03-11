<?php
   require_once 'includes/config_session.inc.php';
   require_once 'includes/signup_view.inc.php';
   require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/main.css">
   <title>SignUp System</title>
</head>
<body>

   <h3>
      <?php
         output_username();
      ?>
   </h3>
   <?php
   if (!isset($_SESSION["user_id"])){ ?>
   <h3>LogIn</h3>

    <form action="includes/login.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button>LogIn</button>
   </form>
   <?php }?>
      
   <?php
      check_login_errors();
   ?>

   <?php
      if (!isset($_SESSION["user_id"])){ 
         ?>
            <h3>SignUp</h3>

            <form action="includes/signup.inc.php" method="post">
               <?php
                  signup_inputs();
               ?>
               <button>SignUp</button>
            </form>
         <?php
      }
   ?>
 

   <?php
      check_signup_errors();
   ?>

   <?php
      if (isset($_SESSION["user_id"])){ ?>
         <h3>LogOut</h3>

         <form action="includes/logout.inc.php" method="post">
         <button class="logout"><img src="images/logout-circle-r-fill.svg" alt=""></button>
         </form>
      <?php }
   ?>

</body>
</html>