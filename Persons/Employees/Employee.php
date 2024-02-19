<?php 
namespace Persons\Employees;
use Persons\Person;

class Employee extends Person {
    private int $employeeId;
    private float $salary;

    public function __construct($name, $age, $address, $employeeId, $salary) {
        parent::__construct($name, $age, $address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    // 追加の機能やゲッターとセッターを実装
}
?>