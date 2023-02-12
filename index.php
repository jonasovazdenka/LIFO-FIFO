<?php

interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
  }

class LIFO implements Pushable {
  private $stack = [];

  public function push($value) {
    array_push($this->stack, $value);
  }

  public function pop():mixed {
    return array_pop($this->stack);
  }
}

class FIFO implements Pushable {
  private $queue = [];

  public function push($value):mixed {
    array_push($this->queue, $value);
  }

  public function pop():mixed {
    return array_shift($this->queue);
  }
}
