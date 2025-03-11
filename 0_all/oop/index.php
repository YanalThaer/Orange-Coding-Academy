<?php
require_once 'Car.php';
require_once 'MotorCycle.php';
require_once 'Balance.php';


$userName = "Yanal";

// $car1 = new Car();
// $car1->setName($userName,'Toyota');
// $car1->setColor('Red');
// $car1->move();
// echo "<br>";
// $car2 = new Car("Audi", "White");
// $car2->move();
// echo "<br>";
// $bike1 = new MotorCycle();
// $bike1->move(100);

$balanceObj = new Balance();
$balanceObj->deposit(100);
echo $balanceObj->getBalance();
?>