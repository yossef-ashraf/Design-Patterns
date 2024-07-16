https://refactoring.guru/design-patterns/abstract-factory

The Abstract Factory Pattern is a creational design pattern that provides an interface for creating families of related or dependent objects without specifying their concrete classes. This pattern is particularly useful when a system should be independent of how its products are created, composed, and represented.

Components of the Abstract Factory Pattern:
AbstractFactory: Declares an interface for operations that create abstract product objects.
ConcreteFactory: Implements the operations to create concrete product objects.
AbstractProduct: Declares an interface for a type of product object.
Product: Defines a product object to be created by the corresponding ConcreteFactory; implements the AbstractProduct interface.
Client: Uses only the interfaces declared by AbstractFactory and AbstractProduct classes.


