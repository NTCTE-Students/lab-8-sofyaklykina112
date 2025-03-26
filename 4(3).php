<?php
class Counter {
    private $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function getCount() {
        return $this->count;
    }
}

$counter = new Counter();

$counter->increment();
echo 'Текущее значение счетчика: ' . $counter->getCount() . "\n"; 

for ($i = 0; $i < 5; $i++) {
    $counter->increment();
}
echo 'Текущее значение счетчика: ' . $counter->getCount() . "\n"; 

for ($i = 0; $i < 3; $i++) {
    $counter->decrement();
}
echo 'Текущее значение счетчика: ' . $counter->getCount() . "\n"; 