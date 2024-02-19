<?php 
namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Restaurants\Restaurant;
use Invoices\Invoice;
use DateTime;

class Cashier extends Employee {

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {

        $order = new FoodOrder($categories, new DateTime());
        echo "The cashier {$this->name} received the order". PHP_EOL;

        // find chef from restaurant's stafflist
        $staffList = $restaurant->getStaff();
        $chef = null;
        foreach($staffList as $staff) {
            if ($staff instanceof Chef) {
                $chef = $staff;
            }
        }
        $chef->prepareFood($order);
        return $order;
    }

    public function generateInvoice(FoodOrder $order) : Invoice {

        // caluclate form FoodOrder from customer

        // total price
        $totalPrice = 0;

        // orderTime
        $orderTime = $order->getOrderTime()->format('Y/m/d/ H:i:s');
        // estimated time in muinutes
        $totalCooktime = 0;

        foreach($order->getItems() as $foodItem) {
            $totalPrice += $foodItem->getPrice();
            $totalCooktime += $foodItem->getCooktime();
        }

        $invoice = new Invoice($totalPrice, $orderTime, $totalCooktime);
        echo "{$this->name} made the invoice."."\n";

        return $invoice;
    }
}
?>