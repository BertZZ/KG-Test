<?php
use PHPUnit\Framework\TestCase;
require './src/deck.php';
class DeckTests extends TestCase
{
  public function testCanDealACardFromADeck()
  {
    $class = new Dealer;
    $deckClass = new Deck;
    $deltCard = $class->deal($deckClass);
    $value = $deltCard->value;
    $suit = $deltCard->suit;
    $this->assertEquals("King", $value);
    $this->assertEquals("Diamond",$suit);
    $length = count($deckClass->getDeck());
    $this->assertEquals(51, $length);
  }
}
?>
