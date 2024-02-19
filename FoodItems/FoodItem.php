<?php 
namespace FoodItems;

abstract class FoodItem {

    protected string $name;
    protected string $description;
    protected string $price;
    protected int $cooktime;

    public function __construct(string $name, string $description, float $price, int $cooktime) {
        // echo "foodItem";
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->cooktime = $cooktime;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }
    
    public function getCooktime(): int {
        return $this->cooktime;
    }    

    abstract public static function getCategory(): string;


}

?>