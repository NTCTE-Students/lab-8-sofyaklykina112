<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount('123457496', 3000);

$account->deposit(800); 
echo 'Баланс после депозита: ' . $account->getBalance() . "\n"; 

$account->withdraw(300); 
echo 'Баланс после снятия: ' . $account->getBalance() . "\n"; 

$account->withdraw(2800); 
echo 'Баланс после неудачной попытки снятия: ' . $account->getBalance() . "\n"; 

$account->deposit(-900); 
echo 'Баланс после отрицательного депозита: ' . $account->getBalance() . "\n"; 

echo 'Текущий баланс: ' . $account->getBalance() . "\n"; 
