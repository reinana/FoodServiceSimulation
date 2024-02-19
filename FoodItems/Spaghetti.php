<?php 
namespace FoodItems;

class Spaghetti extends FoodItem {
    protected static string $category = 'Spaghetti';
    
    public function __construct() {
        $name = "Spaghetti";
        $description = "Classic Italian pasta served with a rich tomato sauce.";
        $price = 7.50;
        $cookTime = 12;
        parent::__construct($name, $description, $price, $cookTime);
    }

    public static function getCategory(): string {
        return self::$category;
    }
}
