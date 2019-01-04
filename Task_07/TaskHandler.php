<?php

namespace Task_07;
require_once "Motocycle.php";

class TaskHandler
{
    public static function Start()
    {
        $motocycle = new Motocycle("Kawasaki ZX6R", 636, 122.7, 17,
            ["frontSuspension" => "41 mm (2 in) inverted cartridge fork with adjustable preload, stepless rebound and compression damping",
                "rearSuspension" => "Bottom-link Uni-Trak system with gas-charged shock, stepless rebound and compression adjustability",]);

        $serialized = $motocycle->Serialize();
        $deserialized = Motocycle::Deserialize($serialized);

        return ["serialized" => $serialized, "deserialized" => $deserialized];
    }
}