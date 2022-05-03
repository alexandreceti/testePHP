<?php

class items {
  public int $item1;
  public int $item2;
  public int $item3;

  public function getItem1() {
    return $this->item1;
  }

  public function setItem1(int $item) {
    return $this->item1 = $item;
  }

  public function getItem2() {
    return $this->item2;
  }

  public function setItem2(int $item) {
    return $this->item2 = $item;
  }

  public function getItem3() {
    return $this->item2;
  }

  public function setItem3(int $item) {
    return $this->item3 = $item;
  }

  public function produto() {
    return $this->item1 * $this->item2 * $this->item3;
  }
}


$items = new items();
$items->setItem1(2);
$items->setItem2(2);
$items->setItem3(2);

echo $items->produto() . PHP_EOL;