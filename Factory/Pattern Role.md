https://refactoring.guru/design-patterns/factory-method

Factory Method is a structural design pattern that provides an interface for creating objects in a superclass, but allows the subclass to modify the type of objects to be created. Instead of calling the constructor directly, you can call the factory method.

Main ingredients:
Product: Defines the interface of the objects created by the factory.
Concrete Product: implements the interface of the product.
Creator: Declares a factory method, which returns an object of type Product. You may also specify a default implementation of the factory method that returns a virtual tangible product object.
Concrete Creator: redefines the factory method to return an object of type concrete.
Ideal scenario:
Imagine you are creating a transportation app. Depending on the type of transportation, you may need different transportation objects (truck, ship).

Product: The Transport interface declares the deliver() method.
Concrete Product: The Truck and Ship classes implement the Transport interface.
Creator: The Logistics class declares the factory method createTransport(), which returns a Transport object.
Concrete Creator: The RoadLogistics and SeaLogistics classes define the createTransport() method to return Truck and Ship objects, respectively.
the benefits:
Flexibility: Allows a class to defer construction to subclasses.
Extensibility: Makes the code more extensible by allowing subclasses to provide extended versions of the object.
Encapsulation: Enhances encapsulation by hiding the creation process from the client.
When to use:
When a class cannot predict what type of objects it needs to create.
When a class wants subclasses to define the objects it creates.
When the responsibility for creating the object needs to be delegated to subclasses.