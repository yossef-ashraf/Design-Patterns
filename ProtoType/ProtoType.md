[prototype](https://refactoring.guru/design-patterns/prototype)

Prototype Design Pattern is a structural design pattern used to create new objects by copying an existing object rather than creating it from scratch. This pattern is useful when the cost of creating a new object from scratch is high or when you need to preserve the state of an object across multiple copy operations.

### Main ingredients:

1. **Prototype**: An interface that contains a `clone` method for copying the object.
2. **Concrete Prototype**: A class that implements the Prototype interface and provides an implementation of the `clone` method.
3. **Client**: The object that uses the `clone` method to create new copies of objects.