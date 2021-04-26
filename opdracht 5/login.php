<?php
include 'database.php';

$msg = '';
if (isset($_POST['submit']))
{

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach ($fieldnames as $fieldname)
    {
        if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname]))
        {
            $error = true;
            $msg = 'error';
        }
    }

    if (!$error)
    {
        $obj = new database();
        $obj->loginuser($_POST['username'], $_POST['password']);

    }
    else
    {
        //
    }
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
   </head>
   <body>
      <form method="POST" action="login.php">
         <input type="text" name="username" placeholder="Username" required/><br>
         <input type="password" name="password" placeholder="Password" required/><br>
         <button type="submit" name="submit" class="btn">Login</button><br>
      </form>
   </body>
</html>

