
<?php
session_start();

$_SESSION['score'] = 0;

?>
<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>♠️Blackjack</title>
</head>
<body>
<h2>Are you ready to play?</h2>
<img src="https://www.pinclipart.com/picdir/big/207-2074589_basic-blackjack-strategy-cartoon-blackjack-clipart.png" height="180px" alt="casino dealer">
<form method="POST" action="game.php" >
    <input type="submit" name="startGame" value="Click Here">
</form>
</body>
</html>