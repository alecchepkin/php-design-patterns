### Design Patterns



####![alt tag](https://habrastorage.org/getpro/habr/post_images/262/c9e/d92/262c9ed9247e232f099d35de841bf5d9.png) [Behavioral](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/)
- [Chain of Responsibility](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/ChainOfResponsobility)
- [Command](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Command)
- [Interpreter](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Interpreter)
- [Iterator](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Iterator)
- [Mediator](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Mediator)
- [Memento](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Memento)
- [Observer](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Observer)
- [State](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/State)
- [Strategy](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Strategy)
- [Template](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Template)
- [Method](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Method)
- [Visitor](https://github.com/olegre/DesignPatterns/tree/master/Behavioral/Visitor)

####![alt tag](https://habrastorage.org/getpro/habr/post_images/8fd/16f/b0f/8fd16fb0fc58c0dc3291abe1d98abb12.png)  [Creational](https://github.com/olegre/DesignPatterns/tree/master/Creational/)
- [Abstract Factory](https://github.com/olegre/DesignPatterns/tree/master/Creational/AbstractFactory)
- [Builder](https://github.com/olegre/DesignPatterns/tree/master/Creational/Builder)
- [Factory Method](https://github.com/olegre/DesignPatterns/tree/master/Creational/FactoryMethod)
- [Prototype](https://github.com/olegre/DesignPatterns/tree/master/Creational/Prototype)
- [Singleton](https://github.com/olegre/DesignPatterns/tree/master/Creational/Singleton)


####![alt tag](https://habrastorage.org/getpro/habr/post_images/3d2/c67/1bf/3d2c671bfcaa92b6a7ee0eb185247dc8.png) [Structural](https://github.com/olegre/DesignPatterns/tree/master/Structural/)
- [Adapter](https://github.com/olegre/DesignPatterns/tree/master/Structural/Adapter)
- [Bridge](https://github.com/olegre/DesignPatterns/tree/master/Structural/Bridge)
- [Composite](https://github.com/olegre/DesignPatterns/tree/master/Structural/Composite)
- [Decorator](https://github.com/olegre/DesignPatterns/tree/master/Structural/Decorator)
- [Facade](https://github.com/olegre/DesignPatterns/tree/master/Structural/Facade)
- [Flyweight](https://github.com/olegre/DesignPatterns/tree/master/Structural/Flyweight)
- [Proxy](https://github.com/olegre/DesignPatterns/tree/master/Structural/Proxy)

![alt tag](https://habrastorage.org/getpro/habr/post_images/349/055/ba9/349055ba96e21b43c7d3e506d4920bc8.jpg)


####Relations between classes

 ![alt tag](https://habrastorage.org/getpro/habr/post_images/ca8/dca/2a5/ca8dca2a537a1ec8044e88984c3f8b02.png) агрегация (aggregation) — описывает связь «часть»–«целое», в котором «часть» может существовать отдельно от «целого». Ромб указывается со стороны «целого».

 ![alt tag](https://habrastorage.org/getpro/habr/post_images/4de/b17/e66/4deb17e6696fc05e610d73ca47b1a49a.png) композиция (composition) — подвид агрегации, в которой «части» не могут существовать отдельно от «целого».

 ![alt tag](https://habrastorage.org/getpro/habr/post_images/43b/4e7/9ac/43b4e79ac9d10a4f8b57859b019c7c24.png) зависимость (dependency) — A dashed arrowhead line indicates a class that instantiates objects of another
                                                                                                                                            class. The arrow points to the class of the instantiated objects.


 — ![alt tag](https://habrastorage.org/getpro/habr/post_images/aa6/efe/a5f/aa6efea5f552569c7fa6ce4e5603e684.png) обобщение (generalization) — отношение наследования или реализации интерфейса. Со стороны стрелки находится суперкласс или интерфейс.
