<?php
class Order {
    public $items = [];
    public function addItem($name, $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
    }
    public function getTotal() {
        return array_sum(array_column($this->items, 'price'));
    }
}
