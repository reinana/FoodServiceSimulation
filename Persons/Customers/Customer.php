<?php 
namespace Persons\Customers;

use DateTime;
use FoodOrders\FoodOrder;
use Invoices\Invoice;
use Persons\Employees\Cashier;
use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person {

    private array $interestedTasteMap;

    public function __construct(string $name, int $age, string $address, array $interestedTasteMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTasteMap = $interestedTasteMap;
        echo "{$this->name} wanted to eat " .implode(", ", array_keys($this->interestedTasteMap)). ".\n";
    }

    public function interestedCategories(Restaurant $restaurant): array {
        // レストランから興味のあるカテゴリのリストを返します。
        $orderList = [];
        
        foreach ($this->interestedTasteMap as $itemName => $quantity) {
            foreach ($restaurant->getMenu() as $foodItem) {
                if ($foodItem->getName() == $itemName) {
                    for ($i = 0; $i < $quantity; $i++) {
                        $orderList[] = $foodItem;
                    }
                }
            }
        }

        return $orderList;
    }

    public function order(Restaurant $restaurant): Invoice {
        // the list of customer wants to eat
        $foodList = $this->interestedCategories($restaurant);
        
        // find cashier from restaurant's stafflist
        $staffList = $restaurant->getStaff();
        $cachier = $staffList[0];
        foreach($staffList as $staff) {
            if ($staff instanceof Cashier) {
                $cachier = $staff;
            }
        }

        $orders = [];
        foreach ($this->interestedTasteMap as $foodName => $quantity) {
            if ($this->isFoodAvailable($foodName, $restaurant->getMenu())) {
                $orders[] = "{$foodName} x {$quantity}";
            }
        }
        $orderString = implode(", ", $orders);
        echo "{$this->name} was looking at the menu, and ordered {$orderString}." . "\n";
    
        
        $foodOrder = $cachier->generateOrder($foodList, $restaurant);
        $invoice = $cachier->generateInvoice($foodOrder);
        return $invoice;

    }

    // 
    private function isFoodAvailable($foodName, $menu) {
        foreach ($menu as $foodItem) {
            if ($foodItem->getName() == $foodName) {
                return true;
            }
        }
        return false;
    }
}

?>