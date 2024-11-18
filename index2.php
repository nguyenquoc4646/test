<?php
class A {
    protected $name = "Class A";

    protected function __construct($name) {
        $this->name = $name;
    }
}

class B extends A {
    public function __construct($name) {
        // Gọi constructor của class A
        parent::__construct($name);
    }
    
    public function getName() {
        return $this->name;
    }
}

$objB = new B("Class B");
echo $objB->getName(); // Output: Class B
