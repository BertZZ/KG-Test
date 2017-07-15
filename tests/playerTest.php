<?php
use PHPUnit\Framework\TestCase;
require_once './src/card.php';
require_once './src/player.php';
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

  public function testPlayerCanRecieveMoreThanOneCardToHand()
  {
    $class = new Player;
    $card = new Card("Ace","Spade");
    $card2 = new Card("King","Hearts");
    $class->recieveDeltCard($card);
    $class->recieveDeltCard($card2);
    $array = $class->getHand();
    $length = count($array);
    $this->assertEquals(2, $length);
  }

}
?>
