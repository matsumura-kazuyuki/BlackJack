<?php

class Card
{
    private $marks = [
        '♥', '♦', '♣', '♠',
    ];
    private $numbers = [
        'A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K',
    ];
    private $deck = [];

    public function setInitialDeck()
    {
        foreach($this->marks as $mark){
            foreach($this->numbers as $number){
                array_push($this->deck, $mark . 'の' . $number);
            }  
        }
        shuffle($this->deck);
    }

    public function getHands(int $num)
    {
        $hands = [];
        for ($i=0; $i<$num; $i++) {
            array_push($hands, array_shift($this->deck));
        }
        return $hands;
    }
}
