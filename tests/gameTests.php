<?php
use PHPUnit\Framework\TestCase;

class GameTests extends TestCase
{
  public function testTheGameHasADeck()
  {
    $game = new Game;
    $deck = $game->deck;
    $this->assertInstanceof(Deck::class, $deck);
  }
}
?>
