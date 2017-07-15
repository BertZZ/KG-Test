<?php
require_once 'card.php';
class Deck
{
  public $deck = array();
  public static $suits = array("Diamond","Spade","Club","Heart");
  public static $values = array("King","Queen","Jack",10,9,8,7,6,5,4,3,2,"Ace");

  public function __construct()
  {
    $this->makeDeck();
    $this->getDeck();
  }
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
?>
