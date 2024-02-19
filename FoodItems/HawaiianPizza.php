<?php 
namespace FoodItems;

class HawaiianPizza extends FoodItem {
    protected static string $category = 'HawaiianPizza';
    
    public function __construct() {
        $name = "Hawaiian Pizza";
        $description = "A delightful mix of ham and pineapple on a classic pizza base.";
        $price = 8.99;
        $cookTime = 10; // 前提として、親クラスのコンストラクタにcookTime引数があること
        parent::__construct($name, $description, $price, $cookTime);
    }

    public static function getCategory(): string {
        return self::$category;
    }
}