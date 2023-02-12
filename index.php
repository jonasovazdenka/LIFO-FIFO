<?php

interface Pushable{
    public function push($value);
    public function pop();
  }

class LIFO implements Pushable {
  private $stack = [];

  public function push($value) {
    array_push($this->stack, $value);
    return $this;
  }

  public function pop() {
    return array_pop($this->stack);
  }
}

class FIFO implements Pushable {
  private $queue = [];

  public function push($value) {
    array_push($this->queue, $value);
    return $this;
  }

  public function pop() {
    return array_shift($this->queue);
  }
}

$L = (new LIFO)->push(6);
$L_value = $L->pop();
$F = (new FIFO)->push(4);
$F_value = $F->pop();

var_dump($L_value);
var_dump($F_value);
