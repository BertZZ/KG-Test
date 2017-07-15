<?php
class Shuffler
{
  public function shuffle($deck)
  {
    shuffle($deck->deck);
    return $deck;
  }
}
?>
