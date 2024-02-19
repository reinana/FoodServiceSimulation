<?php 

namespace Invoices;

class Invoice {
    private float $finalPrice;
    private string $orderTime;
    private int $completionTime;

    public function __construct(float $finalPrice, string $orderTime, int $completionTime) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->completionTime = $completionTime;
    }

    public function printInvoice(): void {
        echo "----------------------------------------" . PHP_EOL;
        echo "Date: " . $this->orderTime . PHP_EOL;
        echo "Final Price: $" . $this->finalPrice . PHP_EOL;
        echo "----------------------------------------" . PHP_EOL;
    }
}
?>