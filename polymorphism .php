<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo! Moo!";
    }
}

// Create instances of animals
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
$cow = new Cow("Daisy");

// Make sounds
echo $dog->name . ": " . $dog->makeSound() . PHP_EOL;
echo $cat->name . ": " . $cat->makeSound() . PHP_EOL;
echo $cow->name . ": " . $cow->makeSound() . PHP_EOL;

?>