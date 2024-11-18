<?php
class A {
    protected $name = "Class A";

    protected function showName() {
         $this->name;
    }
}

class B extends A {
    public function displayName() {
        // Gọi phương thức showName() của class A
        return $this->showName();
    }
}

$objB = new B();
echo $objB->displayName(); // Output: Class A
