<?php
class Player
{
  public $hand = array();

  public function recieveDeltCard($card)
  {
    $this->hand []= $card;
  }

  public function getHand()
  {
    return $this->hand;
  }
}
?>
