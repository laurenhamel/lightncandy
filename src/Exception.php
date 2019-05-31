<?php

namespace LightnCandy;

class Exception extends \Exception {
  
  public function setMessage( $message ) {
    $this->message = $message;
  }
  
}

?>