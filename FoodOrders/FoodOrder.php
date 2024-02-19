<?php 
namespace FoodOrders;

use DateTime;

class FoodOrder {
    private array $items;
    private DateTime $orderTime;

    public function __construct(array $items, DateTime $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }

    public function getItems() {
        return $this->items;
    }
    public function getOrderTime() {
        return $this->orderTime;
    }
}

?>