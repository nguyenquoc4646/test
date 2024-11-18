<?php

// Abstract class định nghĩa các phương thức chung
abstract class PaymentMethod
{
    private $amount;

    // Constructor để thiết lập số tiền thanh toán
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    // Phương thức chung để tạo hóa đơn
    private function generateInvoice()
    {
        echo "Generating invoice for amount: {$this->amount}...\n";
    }
    
    public function get() {
        $this->generateInvoice();
    }



    // Phương thức trừu tượng để xử lý thanh toán
    abstract public function processPayment();
}

// Lớp con: Thanh toán qua thẻ tín dụng
class CreditCardPayment extends PaymentMethod
{
    private $cardNumber;

    public function __construct($amount, $cardNumber)
    {
        parent::__construct($amount);
        $this->cardNumber = $cardNumber;
    }

    public function processPayment()
    {
        echo "Processing credit card payment of {$this->amount} using card: {$this->cardNumber}\n";
    }
    public function showGen()
    {
        $this->get();
    }
}

function main()
{
    // Thanh toán qua thẻ tín dụng
    $creditCardPayment = new CreditCardPayment(100, "1234-5678-9012-3456");
    $creditCardPayment->showGen();
    echo "<br>";
}

main();
