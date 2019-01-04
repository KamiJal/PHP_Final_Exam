<?php

namespace Task_07;

class Motocycle
{
    public $name;
    private $displacement;
    private $power;
    private $fuelTankCapacity;
    private $suspension;

    public function __construct(string $name, int $displacement, float $power, int $fuelTankCapacity, array $suspension)
    {
        $this->name = $name;
        $this->displacement = $displacement;
        $this->power = $power;
        $this->fuelTankCapacity = $fuelTankCapacity;
        $this->suspension = $suspension;
    }

    public function Serialize()
    {
        return serialize($this);
    }

    public static function Deserialize(string $data)
    {
        if (empty($data))
            return null;

        return unserialize($data);
    }

    public function ToHtml()
    {
        $format = "<strong>Motocycle:</strong> %s.<br><strong>Displacement:</strong> %d cc.<br>";
        $format .= "<strong>Power:</strong> %d hp.<br><strong>Fuel tank capacity:</strong> %d litres.<br>";
        $format .= "<strong>Front suspension:</strong> %s.<br><strong>Rear suspension:</strong> %s.";
        return sprintf($format, $this->name, $this->displacement, $this->power, $this->fuelTankCapacity, $this->suspension["frontSuspension"], $this->suspension["rearSuspension"]);
    }


}