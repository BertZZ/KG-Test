<?php
use PHPUnit\Framework\TestCase;

class CardTests extends TestCase
{
  public function testCardHasValue()
  {
    $this->assertClassHasAttribute('value', Card::class);
  }

  public function testCardHasSuit()
  {
    $this->assertClassHasAttribute('suit', Card::class);
  }

  public function testCardCanBeCreatedWithANumericValue()
  {
    $card = new Card(3, "Spade");
    $this->assertEquals(3, $card->value);
  }

  public function testCardCanBeCreatedWithAStringValue()
  {
    $card = new Card("Ace", "Spade");
    $this->assertEquals("Ace", $card->value);
  }

  public function testCardCanBeCreatedWithASuit()
  {
    $card = new Card("Ace", "Diamond");
    $this->assertEquals("Diamond", $card->suit);
  }
}
?>
