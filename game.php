<?php
declare(strict_types=1);
require "blackjack.php";
session_start();

if (isset($_SESSION['player'])){
    $player = new Blackjack ($_SESSION['player']);
} else {
    $_SESSION['player'] =0;
    $player = new Blackjack ($_SESSION['player']);
}

if (isset($_SESSION['dealer'])){
    $dealer = new Blackjack ($_SESSION['dealer']);
} else {
    $_SESSION['dealer'] =0;
    $dealer = new Blackjack ($_SESSION['dealer']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
    if ($_POST['action'] == 'hit') {
    $player->hit();
    $_SESSION['cards'] = $player->cards;
    $_SESSION['player'] = $player->showScore();

    if ($player->showScore() > 21) {
        echo " <br> You lose  😝";
        session_destroy();
        }
    }

        if ($_POST['action'] == 'stand'){
        $player-> stand($player, $dealer);

        if ($_POST['action'] == 'surrender'){
            session_destroy();
        }





}




