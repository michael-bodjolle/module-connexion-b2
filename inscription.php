
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>INSCRIPTION</title>
</head>
<body>
   <header>
    <?php 
include "header.php";

if (isset($_POST['submit'])){
$user->inscription($_POST['login'], $_POST['firstname'], $_POST['lastname'],$_POST['password'], $_POST['repeatpassword']);
// var_dump($user);
} 

?>
</header>

<main>  
    <h1>INSCRIPTION</h1>
<form action="" method="post">
  
      <label for="login">Login&nbsp;:</label>
      <input type="text" id="login" name="login" />
    
      <label for="firstname">Firstname&nbsp;:</label>
      <input type="text" id="firstname" name="firstname" />

      <label for="lastname">Lastname&nbsp;:</label>
      <input type="text" id="lastname" name="lastname" />
    
      <label for="password">Password&nbsp;:</label>
      <input type="password" id="password" name="password" />

      <label for="repeatpassword">Repeatpassword&nbsp;:</label>
      <input type="password" id="repeatpassword" name="repeatpassword" />
   
  <div class="button">
  <button type="submit" name="submit">Envoyer le message</button>
</div>
</form></main>
 



</body>
</html>