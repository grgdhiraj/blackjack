<?php
class Blackjack

{
    public $score;


    public function __construct($score = '0')
    {
        $this->score = $score;

    }

    public function firstTwo() {
        $cardOne = rand(1,11);
        $cardTwo = rand(1,10);
    }
    public function hit() {
        $card = rand(1, 11);
        $this->score += $card;
    }
    public function stand() {


    }
    public function surrender() {


    }

}

