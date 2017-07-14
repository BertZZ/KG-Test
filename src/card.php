<?php
class Card
{
  public $value;
  public $suit;

  function __construct( $value, $suit ) {
  		$this->value = $value;
  		$this->suit = $suit;
  	}
}
?>
