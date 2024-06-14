<?php
// Your PHP code goes here
echo "Hello, World!";


function greet() {
    echo "Hello, World!";
}

// Calling the function
greet();


function greet($name) {
    echo "Hello, $name!";
}

// Calling the function with an argument
greet("Alice");

function greet($name = "World") {
    echo "Hello, $name!";
}
greet(); // Hello, World!
greet("Alice"); // Hello, Alice!


function add($a, $b) {
    return $a + $b;
}
$result = add(2, 3);
echo $result; // 5


function sayHello() {
    echo "Hello!";
}
$func = 'sayHello';
$func(); // Calls sayHello()



$length = strlen("Hello, World!");
echo $length; // 13


$greet = function($name) {
    echo "Hello, $name!";
};

$greet("Alice"); // Hello, Alice!


$nums = [1, 2, 3, 4, 5];
$squared = array_map(fn($n) => $n * $n, $nums);
print_r($squared); // [1, 4, 9, 16, 25]


class MyClass {
    public static function staticMethod() {
        echo "Static method called!";
    }
}
$callable = MyClass::staticMethod(...);
$callable(); // Static method called!

?>

