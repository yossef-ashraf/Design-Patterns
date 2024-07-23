Object Pool is a structural design pattern used to manage a collection of reusable objects. The basic idea behind this pattern is to avoid repeatedly creating and destroying objects, by keeping a set of objects ready to use and reusing them when needed. This pattern is especially useful in scenarios where creating objects is expensive in time or resources.

### Main ingredients:

1. **Object Pool**: Contains a collection of reusable objects. Provides methods for getting an object from the pool and returning the object to it after use.
2. **Reusable Object**: Objects that will be stored in the pool and reused.
3. **Client**: The object or code that uses objects from the pool.

### The way of work:

- When a customer needs an item, he requests it from Al Baraka.
- If the pool contains an unused object, the pool returns that object.
- If the pool is empty, the pool creates a new object and returns it to the client.
- After finishing using the object, the client returns the object to the pool to be available for use again.

### the benefits:

- **Performance improvement**: Avoid high costs of creating and destroying redundant objects.
- **Resource Management**: Improve resource management by reusing objects.