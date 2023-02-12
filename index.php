<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php 
include("./includes.php");
    
    ?>
  <form method="POST" action="./db.php" >

    <input type="text" placeholder="введите логин" name="login">
    <input type="password" placeholder="введите пароль" name="password" >
    <input type="submit" value="авторизироваться">
  </form>
 
  </body>
</html>
  