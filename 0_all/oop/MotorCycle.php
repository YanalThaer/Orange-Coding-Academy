<?php
require_once 'Vehicle.php';

class MotorCycle extends Vehicle {
    public function move($overloading, $overloading2 = null) {
        if ($overloading2 === null) {
            echo "The motorcycle is moving with one parameter: " . $overloading;
        } else {
            echo "The motorcycle is moving with two parameters: " . $overloading . " and " . $overloading2;
        }
    }
}

?>
