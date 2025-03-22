<?php

// Exercise 1: Create a Simple Class
class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string { return $this->name; }
    public function getAge(): int { return $this->age; }
    public function setName(string $name): void { $this->name = $name; }
    public function setAge(int $age): void { $this->age = $age; }
    public function display(): void {
        echo "Name: $this->name, Age: $this->age\n";
    }
}

// Exercise 2: Constructor Method
class Book {
    public function __construct(private string $title, private string $author, private float $price) {}
    public function display(): void {
        echo "Title: $this->title, Author: $this->author, Price: $this->price\n";
    }
}

// Exercise 3: Class Constants
class MathOperations {
    public const PI = 3.14159;
    public static function circleArea(float $radius): float { return self::PI * $radius * $radius; }
    public static function circumference(float $radius): float { return 2 * self::PI * $radius; }
}

// Exercise 4: Inheritance
class Vehicle {
    public function __construct(protected string $brand, protected int $year) {}
    public function display(): void { echo "Brand: $this->brand, Year: $this->year\n"; }
}
class Car extends Vehicle {
    public function __construct(string $brand, int $year, private string $model) {
        parent::__construct($brand, $year);
    }
    public function display(): void {
        parent::display();
        echo "Model: $this->model\n";
    }
}

// Exercise 5: Static Methods
class Calculator {
    public static function add($a, $b) { return $a + $b; }
    public static function subtract($a, $b) { return $a - $b; }
    public static function multiply($a, $b) { return $a * $b; }
    public static function divide($a, $b) { return $b != 0 ? $a / $b : 'Error: Division by zero'; }
}

// Exercise 6: Abstract Classes
abstract class Shape {
    abstract public function calculateArea(): float;
}
class Circle extends Shape {
    public function __construct(private float $radius) {}
    public function calculateArea(): float { return MathOperations::circleArea($this->radius); }
}
class Rectangle extends Shape {
    public function __construct(private float $width, private float $height) {}
    public function calculateArea(): float { return $this->width * $this->height; }
}

// Exercise 7: Interfaces
interface Payable {
    public function makePayment(float $amount): void;
}
class Employee implements Payable {
    public function makePayment(float $amount): void { echo "Employee paid $amount\n"; }
}
class Invoice implements Payable {
    public function makePayment(float $amount): void { echo "Invoice paid $amount\n"; }
}

// Exercise 8: Method Overriding
class Animal {
    public function makeSound(): void { echo "Some generic sound\n"; }
}
class Dog extends Animal {
    public function makeSound(): void { echo "Bark!\n"; }
}
class Cat extends Animal {
    public function makeSound(): void { echo "Meow!\n"; }
}

// Exercise 9: Composition
class Engine {
    public function start(): void { echo "Engine started\n"; }
}
class Transmission {
    public function shiftGear(): void { echo "Gear shifted\n"; }
}
class CarComposition {
    private Engine $engine;
    private Transmission $transmission;
    public function __construct() {
        $this->engine = new Engine();
        $this->transmission = new Transmission();
    }
    public function startCar(): void {
        $this->engine->start();
        $this->transmission->shiftGear();
    }
}

// Exercise 10: Namespaces
namespace FirstNamespace {
    class MyClass { public function greet() { echo "Hello from FirstNamespace!\n"; } }
}
namespace SecondNamespace {
    class MyClass { public function greet() { echo "Hello from SecondNamespace!\n"; } }
}
use FirstNamespace\MyClass as FirstClass;
use SecondNamespace\MyClass as SecondClass;

// Exercise 11: Traits
trait Loggable { public function log(string $message) { echo "Log: $message\n"; } }
trait Serializable { public function serializeData() { return json_encode(get_object_vars($this)); } }
class LoggerUser { use Loggable, Serializable; }

// Exercise 12: Singleton Pattern
class Database {
    private static ?Database $instance = null;
    private function __construct() {}
    public static function getInstance(): Database {
        if (self::$instance === null) self::$instance = new Database();
        return self::$instance;
    }
}

// Exercise 13: Dependency Injection
interface Logger { public function log(string $message): void; }
class FileLogger implements Logger { public function log(string $message): void { echo "Logging to file: $message\n"; } }
class DatabaseLogger implements Logger { public function log(string $message): void { echo "Logging to database: $message\n"; } }
class UserService {
    public function __construct(private Logger $logger) {}
    public function registerUser(string $name): void { $this->logger->log("User $name registered"); }
}

// Exercise 14: Method Chaining
class QueryBuilder {
    private string $query = "";
    public function select(string $fields): self { $this->query .= "SELECT $fields "; return $this; }
    public function from(string $table): self { $this->query .= "FROM $table "; return $this; }
    public function where(string $condition): self { $this->query .= "WHERE $condition "; return $this; }
    public function orderBy(string $field): self { $this->query .= "ORDER BY $field"; return $this; }
    public function getQuery(): string { return $this->query; }
}

// Exercise 15: Magic Methods
class MagicClass {
    private array $data = [];
    public function __set($name, $value) { $this->data[$name] = $value; }
    public function __get($name) { return $this->data[$name] ?? null; }
    public function __call($name, $arguments) { echo "Calling $name with arguments " . implode(", ", $arguments) . "\n"; }
    public function __toString(): string { return json_encode($this->data); }
    public function __invoke() { echo "Object is being used as a function\n"; }
}
