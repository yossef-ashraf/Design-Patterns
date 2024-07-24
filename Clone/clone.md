#### the explanation

- **Shallow Clone**:
 - It creates a new copy of the object but if the object has other objects as properties, it does not deeply copy these objects. In other words, the new copy and the original copy share the same child objects.

- **Deep Clone**:
 - It creates a new copy of the object, and all child objects are also deep copied. In other words, the new copy does not share any child objects with the original copy.

### the explanation
1. **Definition of the Engine object**: An object that contains one property, which is the engine power.
2. **Object definition Car**: An object containing `make`, `model`, and `engine` properties.
3. **Shallow clone**: Creates a copy of the `Car` object without deep copying the properties.
4. **Deep clone**: Creates a copy of the `Car` object and deep copies sub-objects such as `engine`.
5. **Modifying the engine power in the superficially cloned copy**: Affects the original object.
6. **Modify the engine power in the clone in depth**: Does not affect the original object.

### Notes
- After modifying the engine power in the superficially cloned copy, the original object was modified because the superficial clone does not deeply copy sub-objects.
- After adjusting the engine power in the deep clone, the original object was not affected because the deep clone performs a deep copy of the child objects.