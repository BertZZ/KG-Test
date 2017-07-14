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

  public function testTheGameStartsWith4Players()
  {
    $game = new Game;
    $array = $game->players;
    $player = $array[0];
    $length = count($array);
    $this->assertEquals(4, $length);
    $this->assertInstanceof(Player::class, $player);
  }
}
?>
