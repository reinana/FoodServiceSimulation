<?php 
spl_autoload_extensions(".php");
spl_autoload_register(function ($className) {
    // 名前空間をディレクトリの区切りに置き換える
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . '/' . $className . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// FoodItems
$cheeseBurger = new FoodItems\CheeseBurger();
$hawaiianPizza = new FoodItems\HawaiianPizza();
$spaghetti = new FoodItems\Spaghetti();
$fettuccine = new FoodItems\Fettuccine();

// Stuff
$Inavah = new \Persons\Employees\Chef("Inayah Lozano", 40, "Osaka", 1 , 30);
$Nadia = new \Persons\Employees\Cashier("Nadia Valentine", 21, "Tokyo", 2, 20);

// Restaurant
$saizeriya = new \Restaurants\Restaurant(
    [
        $cheeseBurger
    ],
    [
        $Inavah,
        $Nadia
    ]
);

$interestedTasteMap = [
    "Margherita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1
];

// Customer
$Tom = new \Persons\Customers\Customer("Tom", 20, "Saitama", $interestedTasteMap);

// Invoice
$invoice = $Tom->order($saizeriya);
$invoice->printInvoice();
?>