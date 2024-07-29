The Simple Factory pattern is a constructive design pattern used to create objects without specifying the exact object to be created. A Simple Factory provides an interface to create objects by hiding the creation details inside the factory. This pattern is simpler than the Factory Method and Abstract Factory patterns.

### How it works:

- **Factory**: Contains a method to create objects. This method takes parameters that specify the type of object to be created and returns an object of that type.
- **Products**: The objects that will be created by the factory.

### Practical example using PHP:

In this example, we will create a simple factory to create objects for different types of drinks.

#### Code:

```php
<?php

// Drink interface
interface Drink {
public function pour();
}

// Concrete product: Orange Juice
class OrangeJuice implements Drink {
public function pour() {
return "Pouring a glass of Orange Juice.";
} } // Concrete product: apple juice class AppleJuice implements Drink { public function pour() { return "Pouring a glass of Apple Juice.";
 } } // Tangible product: water class Water implements Drink { public function pour() { return "Pouring a glass of Water.";
 } } // Simple Factory class DrinkFactory { public static function createDrink($type) { switch ($type) { case "OrangeJuice": return new OrangeJuice();
 case "AppleJuice": return new AppleJuice();
 case "Water": return new Water();
 default: throw new Exception("Invalid drink type.");
 } } } // Client code function clientCode() { $drink1 = DrinkFactory::createDrink("OrangeJuice");
 echo $drink1->pour() . "\n";

$drink2 = DrinkFactory::createDrink("AppleJuice");
echo $drink2->pour() . "\n";

$drink3 = DrinkFactory::createDrink("Water");
echo $drink3->pour() . "\n";
}

// Run client code
clientCode();

?>
```

### Explanation:

1. **Drink interface**: `Drink` declares a `pour` method that all drinks should implement.

2. **Concrete products**: `OrangeJuice`, `AppleJuice`, `Water` implement the `Drink` interface.

3. **Simple factory**: `DrinkFactory` contains a `createDrink` method that takes the drink type as a parameter and returns an object of the required type.
4. **Client Code**: In the `clientCode` function, `DrinkFactory` is used to create drink objects based on the specified type, and then the `pour` method is called for each drink.

### Benefits:

- **Simplifies object creation**: Makes it easy to create objects without having to know the creation details.
- **Hides creation details**: Isolates the object creation logic within the factory, making it easier to modify and improve later.

### When to use:

- When you need a simple and uniform way to create objects.
- When you want to hide the creation details from the client.
- When you need to create multiple objects of different types but sharing the same interface.

The simple factory pattern is a good choice to simplify the object creation process and reduce complexity in your code, especially when you have multiple types of objects that need to be created based on some criteria.