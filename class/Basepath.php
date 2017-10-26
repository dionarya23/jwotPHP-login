<?php

class Basepath{
  private $base = "http://localhost/jwot-php/";

  public function base_url(){
    echo $this->base;
  }
}
