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
  public $shuffler;
  public $dealer;

  function __construct()
  {
    $this->deck = new Deck();
    $this->shuffler = new Shuffler();
    $this->dealer = new Dealer();
    $this->createPlayers(self::NUMBER_OF_PLAYERS);
  }

  public function startGame($deck)
  {
    $this->shuffleDeck($deck);
    $this->dealCards($deck);
  }

  public function getDeck()
  {
    return $this->deck;
  }

  public function getPlayers()
  {
    return $this->players;
  }

  public function createPlayers($numberOfPlayers)
  {
    for($i = 1; $i <= $numberOfPlayers; $i++){
      $player = new Player();
      $this->players[] = $player;
    }
  }

  public function shuffleDeck($deck)
  {
    $shuffledDeck = $this->shuffler->shuffle($deck->deck);
    $this->deck->deck = $shuffledDeck;
  }
  public function dealCards($deck)
  {
    foreach($this->players as $player);
      {
        $player->recieveDeltCard($this->dealer->deal($deck));
      }
    }
}

?>
