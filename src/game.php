<?php
require_once 'deck.php';
require_once 'player.php';
require_once 'shuffler.php';
require_once 'dealer.php';

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
    for($i = 0; $i < $numberOfPlayers; $i++){
      $player = new Player();
      $this->players[] = $player;
    }
  }

  public function shuffleDeck($deck)
  {
    $shuffledDeck = $this->shuffler->shuffle($deck);
    $this->deck = $shuffledDeck;
  }

  public function dealCards($deck)
  {
    for($i = 0; $i < self::PLAYER_CARDS; $i++){
      foreach($this->players as $player){
        $player->recieveDeltCard($this->dealer->deal($deck));
      }
    }
  }
}
?>
