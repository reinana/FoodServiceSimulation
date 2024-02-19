<?php 
namespace FoodItems;

class Fettuccine extends FoodItem {
    protected static string $category = 'Fettuccine';
    
    public function __construct() {
        $name = "Fettuccine Alfredo";
        $description = "Creamy Alfredo sauce over tender fettuccine noodles.";
        $price = 9.99;
        $cookTime = 15;
        parent::__construct($name, $description, $price, $cookTime);
    }

    public static function getCategory(): string {
        return self::$category;
    }
}
