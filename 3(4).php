<?php
class Thermostat {
    private $temperature;

    public function setTemperature($temperature) {
        if ($temperature >= 10 && $temperature <= 30) {
            $this->temperature = $temperature;
        }
    }

    public function getTemperature() {
        return $this->temperature;
    }
}
$thermostat = new Thermostat();

$thermostat->setTemperature(21);
echo 'Температура установлена на: ' . $thermostat->getTemperature() . "\n"; 

