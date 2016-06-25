# One Interface with many Abstract Classes #
How to use a single class contract while delegating different method contract signatures to abstract classes.

ref: <http://stackoverflow.com/questions/1814821/interface-or-an-abstract-class-which-one-to-use>

### TL;DR ###
> Best practice is to use an interface to specify the contract and an abstract class as just one implementation thereof. That abstract class can fill in a lot of the boilerplate so you can create an implementation by just overriding what you need to or want to without forcing you to use a particular implementation. <http://stackoverflow.com/users/18393/cletus>

## Background: ##

* An interface has any number of method signatures but no method bodies.
* An interface can enforce a contract while providing no other functionality.
* An abstract class has any number of methods or abstract methods.
* An abstract class can enforce a contract while providing some functionality.
* A client class can extend only one abstract class but can implement multiple interfaces.
* Multiple abstract classes can implement a single interface. Each abstract class can be extended by any number of client classes.
* An interface or abstract class can both define a contract.
* There can be more than one contract for a client class.

## When is this useful? ##
You may want to enforce a set number of methods on the client classes. Use an interface.

You may also want to provide some base methods. Use an abstract class.

You may not yet know whether you will provide base classes. Or you may want to enforce a class level contract while delegating method level contracts. Create an interface that is implemented by abstract classes which will be extended to your client classes.

## How is this useful? ##
What if the common method in the different concrete classes require different argument types or numbers of arguments? Use one interface with many abstract classes that all implement the same interface.
The interface can define a common contract even if it is an empty interface. The method contracts can be delegated to the abstract classes.

### Example: ###
In this example, we'll use **InterfaceMyContract** to define the base contract and delegate the method contract to one of:

* AbstractGeneric
* AbstractMyString
* AbstractMyStringAndInt
* AbstractMyUser

The abstract classes are in turn extended to concrete classes:

* Generic
* MyString
* MyStringAndInt
* MyUser

Each concrete class implements the function foo() with different signatures.

* Generic::foo() takes no arguments.
* MyString::foo($str) takes a string;
* MyStringAndInt::foo($str, $int) takes a string and an int.
* MyUser::foo($user) takes a User object.

This form of a hierarchy can be easily extended with additional concrete classes with common methods that may require different method contracts.
At the same time, all classes in the hierarchy will conform to a single interface, namely **InterfaceMyContract**.

Note that multiple concrete strategies with similar method contracts can reuse the same abstract class.

The result is a collection of classes that will conform to a single interface contract but can also have varying method contracts enforced by multiple abstract classes. In other words, we have now defined two levels of contracts: one on the class level via the interface, and another on the method level via abstract classes.

The script try.php illustrates several examples.

Also note that you can optionally add method contracts in the interface contract when applicable. The method bar() illustrates adding a method level contract to the interface while allowing the flexibility of delegating the foo() contract to abstract classes.

