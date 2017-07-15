<?php
use PHPUnit\Framework\TestCase;
require_once './src/game.php';
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

  public function testPlayer1GetsDelt7Cards()
  {
    $game = new Game;
    $deck = $game->getDeck();
    $game->dealCards($deck);
    $players = $game->getPlayers();
    $player1 = $players[0];
    $player1Hand = $player1->getHand();
    $length = count($player1Hand);
    $this->assertEquals(7, $length);
  }
  public function testPlayer2GetsDelt7Cards()
  {
    $game = new Game;
    $deck = $game->getDeck();
    $game->dealCards($deck);
    $players = $game->getPlayers();
    $player2 = $players[1];
    $player2Hand = $player2->getHand();
    $length = count($player2Hand);
    $this->assertEquals(7, $length);
  }
  public function testPlayer3GetsDelt7Cards()
  {
    $game = new Game;
    $deck = $game->getDeck();
    $game->dealCards($deck);
    $players = $game->getPlayers();
    $player3 = $players[2];
    $player3Hand = $player3->getHand();
    $length = count($player3Hand);
    $this->assertEquals(7, $length);
  }
  public function testPlayer4GetsDelt7Cards()
  {
    $game = new Game;
    $deck = $game->getDeck();
    $game->dealCards($deck);
    $players = $game->getPlayers();
    $player4 = $players[3];
    $player4Hand = $player4->getHand();
    $length = count($player4Hand);
    $this->assertEquals(7, $length);
  }
}
?>
