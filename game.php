<?php
declare(strict_types=1);
require "blackjack.php";
session_start();



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
<form method="POST" action="" >
    <form class="form">
        <div class="buttons">
            <button type="submit" name="action" value="hit">Hit</button>
            <button type="submit" name="action" value="stand">Stand</button>
            <button type="submit" name="action" value="surrender">Surrender</button>
        </div>
    </form>
    </div>
</form>