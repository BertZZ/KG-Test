<?php
use PHPUnit\Framework\TestCase;
require_once './src/deck.php';
class DeckTests extends TestCase
{

  public function testDeckIsAnAray()
  {
    $class = new Deck;
    $array = $class->deck;
    $this->assertInternalType('array',$array);
  }

  public function testThatDeckContains52Cards()
  {
    $class = new Deck;
    $array = $class->getDeck();
    $length = count($array);
    $this->assertEquals(52, $length);
  }

  public function testThatTheBottomCardIsTheAceOfHearts()
  {
    $class = new Deck;
    $class->makeDeck();
    $array = $class->getDeck();
    $card = $array[51];
    $value = $card->value;
    $suit = $card->suit;
    $this->assertEquals("Ace", $value);
    $this->assertEquals("Heart",$suit);
  }

  public function testThatTheTopCardIsTheKingOfDiamonds()
  {
    $class = new Deck;
    $class->makeDeck();
    $array = $class->getDeck();
    $card = $array[0];
    $value = $card->value;
    $suit = $card->suit;
    $this->assertEquals("King", $value);
    $this->assertEquals("Diamond",$suit);
  }
  // These tests are probably not needed but I wanted peace of mind that some of the cards were where I expected them to be
  public function testThatThe51stCardIsTheTwoOfHearts()
  {
    $class = new Deck;
    $class->makeDeck();
    $array = $class->getDeck();
    $card = $array[50];
    $value = $card->value;
    $suit = $card->suit;
    $this->assertEquals(2, $value);
    $this->assertEquals("Heart",$suit);
  }
  public function testThatThe26thCardIsTheAceOfSpades()
  {
    $class = new Deck;
    $class->makeDeck();
    $array = $class->getDeck();
    $card = $array[25];
    $value = $card->value;
    $suit = $card->suit;
    $this->assertEquals("Ace", $value);
    $this->assertEquals("Spade",$suit);
  }
}
?>
