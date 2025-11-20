<?php
session_start();

if (isset($_POST['delete'])) {
    unset($_SESSION['username']);
}  // <- Cette accolade manquait !

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
</head>
<body>
 
<h1>Login</h1>
 
<?php
 
if(!isset($_SESSION['username'])) {
    ?>
   
    <form method="post">
        <label>Username :</label>
        <input type="text" name="username">
        <input type="submit" value="Valider">
    </form>
 
    <?php
} else {

    echo "Bonjour " ;"paola". htmlspecialchars($_SESSION['username']);
    ?>
    
    <form method="post" style="margin-top: 10px;">
        <button type="submit" name="delete">Supprimer la session</button>
    </form>

    <?php
}
?>
 
</body>
</html>