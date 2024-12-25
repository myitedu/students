<?php
interface Flyable {
    public function fly();
}
interface Jumpable {
    public function jump();
}

class Bird implements Flyable {
    public function fly() {
        return "The bird is flying.";
    }
}

class Cat implements Jumpable {
    public function jump() {
        return "The bird is flying.";
    }
}

$bird = new Bird();
echo $bird->fly(); // Output: The bird is flying.
