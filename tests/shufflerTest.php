<?php
use PHPUnit\Framework\TestCase;
require_once './src/deck.php';
require_once './src/shuffler.php';
class ShufflerTests extends TestCase
{
  public function testDeckCanBeShuffled()
  {
    $class = new Shuffler;
    $deck = new Deck;
    $shuffledDeck = $class->shuffle($deck);
    $this->assertNotEquals($deck->getDeck(),$shuffledDeck);
  }
}
?>
