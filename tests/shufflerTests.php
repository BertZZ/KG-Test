<?php
use PHPUnit\Framework\TestCase;
require './src/deck.php';
class ShufflerTests extends TestCase
{
  public function testDeckCanBeShuffled()
  {
    $class = new Shuffler;
    $deck = new Deck;
    $deck->makeDeck();
    $array = $deck->getDeck();
    $shuffledDeck = $class->shuffle($array);
    $this->assertNotEquals($array,$shuffledDeck);
  }
}
?>
