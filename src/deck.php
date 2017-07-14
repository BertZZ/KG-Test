<?php
require 'card.php';
class Deck
{
  public $deck = array();
  public static $suits = array("Heart","Club","Spade","Diamond");
  public static $values = array("Ace",2,3,4,5,6,7,8,9,10,"Jack","Queen","King");

  public function makeDeck()
  {
    foreach(self::getSuits() as $suit){
      foreach(self::getValues() as $value){
        $card = new Card($value,$suit);
        $this->addCard(new Card($value, $suit));
      }
    }
  }

  public function getSuits()
  {
    return self::$suits;
  }

  public function getValues()
  {
    return self::$values;
  }

  public function getDeck()
  {
    return $this->deck;
  }

  public function addCard(Card $card)
  {
    $this->deck[] = $card;

    return $this;
  }
}
