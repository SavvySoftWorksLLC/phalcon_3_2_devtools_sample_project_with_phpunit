<?php

class BoringLib
{
  protected $value = "";

  public function __construct ($value) {
    $this->value = $value;
  }

  public getValue() {
    return $this->value;
  }
}
