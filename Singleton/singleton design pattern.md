Singleton Design Pattern is a constructive design pattern that ensures that a class can have only one instance and that a public access point is provided to that instance. This pattern is typically used when you need to control access to a shared resource such as a log file or a database connection.
[singleton](https://refactoring.guru/design-patterns/singleton)


### Main components:

1. **Singleton**: A class that ensures that only one instance exists, and provides a public access point to that instance.

### How it works:

- A singleton class has a static property that holds the singleton instance.
- The class has a static method (usually `getInstance`) that returns the singleton instance, and creates it if it does not yet exist.

### Practical example using PHP:

#### Code:

```php
<?php

class Singleton {
// static property that holds the singleton instance
private static $instance = null;

// A special constructor to prevent the creation of new objects outside the class
private function __construct() {
echo "Singleton instance created.\n";
}

// Prevent cloning and duplication
private function __clone() {}
private function __wakeup() {}

// A static method that returns the singleton
public static function getInstance() {
if (self::$instance === null) {
self::$instance = new Singleton();
}
return self::$instance;
}

// An example of a function that a singleton can perform
public function doSomething() {
echo "Doing something.\n";
}
}

// Client Code
$instance1 = Singleton::getInstance();
$instance1->doSomething();

$instance2 = Singleton::getInstance();
$instance2->doSomething();

// Check that both variables refer to the same object
if ($instance1 === $instance2) {
echo "Both instances are the same.\n";
}

?>
```

### Explanation:

1. **Static property**: `private static $instance` holds the singleton of the class `Singleton`.

2. **Private constructor**: `private function __construct()` prevents new objects from being created directly from outside the class.

3. **Copy and clone prevention**: `private function __clone()` and `private function __wakeup()` prevents the object from being copied or cloned.

4. **Object getter**: `public static function getInstance()` returns the singleton, and creates it if it does not exist yet.

5. **Demo function**: `public function doSomething()` demonstrates how to use the singleton.

### Benefits:

- **Resource Control**: Ensures that only one object of the class exists, making it easier to control shared resources.
- **Provide a global access point**: Allows access to the singleton object from anywhere in the application.

### When to use:

- When you need to ensure that only one object of the class exists.
- When you need a shared resource such as a login or database connection.
- When you want to provide a global access point to the object.

The singleton pattern is a powerful tool for managing shared resources and ensuring access control, and is commonly used in programming when you need to manage shared resources efficiently.