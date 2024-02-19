<?php 
namespace FoodItems;

class CheeseBurger extends FoodItem {
    protected static string $category = 'CheeseBurger';
    
    public function __construct() {
        $name = "CheeseBurger";
        $description = "A delicious cheeseburger with lettuce, tomato, and cheese.";
        $price = 5.99;
        $cooktime = 7;
        parent::__construct($name, $description, $price, $cooktime);
    }

    public static function getCategory(): string {
        return self::$category;
    }
}

?>