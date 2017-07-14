<?php
use PHPUnit\Framework\TestCase;

class DeckTests extends TestCase
{

  public function testDeckIsAnAray()
  {
    $class = new Deck;
    $array = $class->deck;
    $this->assertInternalType('array',$array);
  }
  public function testDeckArrayStartsEmpty()
  {
    $class = new Deck;
    $array = $class->deck;
    $length = count($array);
    $this->assertEquals(0, $length);
  }

  public function testIKnowHowToAcessPHPArraysUsingSuitsArray()
  {
    $class = new Deck;
    $array = $class->getSuits();
    $length = count($array);
    $this->assertEquals(4, $length);
  }
  public function testThatDeckContains52Cards()
  {
    $class = new Deck;
    $class->makeDeck();
    $array = $class->getDeck();
    $length = count($array);
    $this->assertEquals(52, $length);
  }
}
 ?>
