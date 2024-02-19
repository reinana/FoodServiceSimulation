<?php 
namespace Restaurants;

use Invoices\Invoice;

class Restaurant {
    private array $menu = [];
    private array $staff = [];

    public function __construct(array $menu, array $staff) {
        // メニューとスタッフを初期化
        $this->menu = $menu;
        $this->staff = $staff;
    }

    public function getMenu() {
        return $this->menu;
    }

    public function getStaff() {
        return $this->staff;
    }

//     public function order(string $category): Invoice {
//         // 注文処理
//         return new Invoice(4, 3, 3);
//     }
}

?>