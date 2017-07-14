<?php
use PHPUnit\Framework\TestCase;
require './src/card.php';
class PlayerTests extends TestCase
{
  public function testPlayersHandStartsEmpty()
  {
    $class = new Player;
    $array = $class->getHand();
    $this->assertEmpty($array);
  }
  public function testPlayerCanRecieveCardToHand()
  {
    $class = new Player;
    $card = new Card("Ace","Spade");
    $class->recieveDeltCard($card);
    $array = $class->getHand();
    $length = count($array);
    $heldCard = $array[0];
    $value = $card->value;
    $suit = $card->suit;
    $this->assertEquals("Ace", $value);
    $this->assertEquals("Spade",$suit);
    $this->assertEquals(1, $length);

  }
}
 ?>
