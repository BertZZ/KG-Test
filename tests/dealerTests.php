<?php
use PHPUnit\Framework\TestCase;
require './src/deck.php';
class DeckTests extends TestCase
{
  public function testCanDealACardFromADeck()
  {
    $class = new Dealer;
    $deckClass = new Deck;
    $deckClass->makeDeck();
    $deck = $deckClass->getDeck();
    $deltCard = $class->deal($deck);
    $value = $deltCard->value;
    $suit = $deltCard->suit;
    $this->assertEquals("King", $value);
    $this->assertEquals("Diamond",$suit);
  }
}
?>