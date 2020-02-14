<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); //shows where errors are
class Blackjack

{
    public $score;
    public $cards = [];


    public function __construct($score = 0)
    {
        $this->score = $score;

    }


    public function firstTwo() {
        $cardOne = rand(1,11);
        $cardTwo = rand(1,10);
    }
    function showScore(): int
    {
        return $this->score;
    }

    function stand (Blackjack $player, Blackjack $dealer)
    {
        echo "You had " .$player->showScore() . '<br>';
        $playTotal = $player->showScore();
        echo "Dealer got ";
        do {
            $dealer->hit();
            $_SESSION['dealer'] = $dealer->showScore();
        } while ($dealer->showScore()<15);

        if($dealer->showScore()>21){
            echo "You got lucky🍀 🤗 ";
            session_destroy();
        }elseif ($dealer->showScore() >=$playTotal && $dealer->showScore() <=21){
            echo "Oops! You lost 😜";
            session_destroy();
        }
    }
    public function hit()
    {
        $card = rand(1, 11);
        array_push($this->cards,$card);
        $this->score += $card;
        echo " $this->score";}}


function surrender()
{unset($_SESSION);
}