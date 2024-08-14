[ Adapter wrapper Pattern](https://refactoring.guru/design-patterns/adapter)

### Adaptor Wrapper Pattern

2.1 Adapter / Wrapper
PURPOSE
The Adapter acts as a wrapper between two objects. It
catches calls for one object and transforms them to format
and interface recognizable by the second object.
To allows classes to work together that normally could not
because of incompatible interfaces by providing its
interface to clients while using the original interfac

The Adaptor Wrapper Pattern is a structural design pattern that transforms an existing class or object interface into one that clients expect. It enables objects with incompatible interfaces to work together, and is typically used to integrate external libraries or APIs into your system.

### Key Components:

1. **Client**: The code that leverages the adapter's services and handles the expected interface.

2. **Target**: The interface that the client expects.

3. **Adapter**: Converts the existing (incompatible) interface to the expected interface.

4. **Adaptee**: The object that the adapter wraps and transforms its interface to match the target's interface.

### How it works:

1. The client defines a Target interface that it expects to use.
2. The adapter wraps the Adaptee and provides an interface that matches the target interface.

3. The client uses the adapter instead of the wrapped adapter directly.

### Practical example using PHP:

#### Scenario:

Let's say we have a payment system that expects a certain interface, but we want to integrate an external payment system with a different interface. We will use the Adapter pattern to unify the interfaces.

#### Code:

```php
<?php

// Target
interface PaymentProcessor {

public function pay($amount);

}

// Wrapped Adapter
class ExternalPaymentService {

public function sendPayment($amount) {

echo "Payment of $$amount sent using ExternalPaymentService.\n";

}
}

// Adapter
class PaymentAdapter implements PaymentProcessor {
private $externalService;

public function __construct(ExternalPaymentService $service) {
$this->externalService = $service;
}

public function pay($amount) {
// Convert payment method to match target interface
$this->externalService->sendPayment($amount);
}
}

// Client Code
function clientCode(PaymentProcessor $processor) {
$processor->pay(100);
}

// Using adapter with encapsulated adapter
$externalService = new ExternalPaymentService();
$adapter = new PaymentAdapter($externalService);

clientCode($adapter); // Output: Payment of $100 sent using ExternalPaymentService.

?>
```

### Explanation:

1. **Target**: The `PaymentProcessor` interface contains the `pay` method expected by the current system.
2. **Adaptee**: The `ExternalPaymentService` class contains the `sendPayment` method which is the interface that is not compatible with the target.
3. **Adapter**: The `PaymentAdapter` class wraps the `ExternalPaymentService` and provides the `pay` method which calls `sendPayment` from the `ExternalPaymentService`.
4. **Client Code**: The client uses the `PaymentProcessor` (in this case, the adapter) to pay the amount, and the adapter handles the interaction with the `ExternalPaymentService`.

### Benefits:

- **Reusability**: Enables reusing existing objects without modifying them.

- **Compatibility**: Enables dealing with incompatible interfaces and working with different systems.

- **Flexibility**: Enhances the flexibility of the system due to its ability to easily integrate external libraries or services.

### When to use:

- When you want to use an existing object, but its interface is not compatible with the current system.
- When you need to integrate external libraries or APIs.
- When you want to simplify your code by unifying different interfaces into a single compatible interface.

The Adaptor Wrapper Pattern is a powerful tool that helps achieve compatibility between different interfaces, facilitating integration between different systems and providing high flexibility in software design.