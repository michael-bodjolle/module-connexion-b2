<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <?php 
include "header.php";

if (isset($_POST['submit'])){
$user->connexion($_POST['login'],$_POST['password']);
var_dump($user);
} 

?>  
    </header>
<main>  
    <h1>INSCRIPTION</h1>
<form action="" method="post">
  
      <label for="login">Login&nbsp;:</label>
      <input type="text" id="login" name="login" />
    
      <label for="password">Password&nbsp;:</label>
      <input type="password" id="password" name="password" />

   
  <div class="button">
  <button type="submit" name="submit">Envoyer le message</button>
</div>
</form></main> 
</body>
</html>