<?php
require 'deck.php';
require 'player.php';
require 'shuffler.php';
require 'dealer.php';

class Game
{
  public $deck;

  function __construct()
  {
    $this->deck = new Deck();
  }

  public function getDeck()
  {
    return $this->deck;
  }
}

?>
