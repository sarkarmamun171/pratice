<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative.");
        }
    }
}

// Create instances of Employee
$employee1 = new Employee("Mamun", 50000);
$employee2 = new Employee("MD Mamun", 60000);

// Get employee information
echo $employee1->getName() . "'s salary is $" . $employee1->getSalary() . PHP_EOL;

echo $employee2->getName() . "'s salary is $" . $employee2->getSalary() . PHP_EOL;

// Try setting a negative salary
try {
    $employee1->setSalary(-1000);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}

// Set a new salary
$employee2->setSalary(65000);
echo $employee2->getName() . "'s updated salary is $" . $employee2->getSalary() . PHP_EOL;

?>