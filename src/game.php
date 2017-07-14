<?php
require 'deck.php';
require 'player.php';
require 'shuffler.php';
require 'dealer.php';

class Game
{
  const NUMBER_OF_PLAYERS = 4;
  const PLAYER_CARDS = 7;
  public $deck;
  public $players = array();

  function __construct()
  {
    $this->deck = new Deck();
    $this->createPlayers(self::NUMBER_OF_PLAYERS);
  }

  public function getDeck()
  {
    return $this->deck;
  }

  public function createPlayers($numberOfPlayers)
  {
    for($i = 1; $i <= $numberOfPlayers; $i++){
      $player = new Player();
      $this->players[] = $player;
    }
  }
}

?>
