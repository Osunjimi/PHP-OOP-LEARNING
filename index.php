<?php
//Object-Oriented Programming (OOP) in PHP is a programming paradigm that organizes code around "objects" instead of "actions and logic"

//Classes: Are template or blueprint for creating objects. It defines the properties (data, variables) and methods (functions, actions) that objects of that class will have. 

//Objects: An object is a specific instance of a class.

//Inheritance: Allows a class (child class) to inherit properties and methods from another class (parent class). It promotes code reusability and reduces redundancy.

//Polymorphism: Enables objects of different classes to be treated as objects of a common superclass. It promotes flexibility and allows for different behaviors based on the object type.

//Encapsulation: Hides internal data and logic within an object and provides controlled access through methods, preventing direct manipulation of the internal state. 

//Methods are functions that are defined within a class and are used to perform specific actions or tasks. They encapsulate the behavior of an object and allow it to interact with other objects or manipulate its own data.

//A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces
class Username{
    public $username;
    public $gender;
    public $email;

//A constructor allows you to initialize an object's properties upon creation of the object. it is created using __construct() function, PHP will automatically call this function when you create an object from a class.

    function __construct($username, $gender, $email)
    {
 //The $this keyword refers to the current object, and is only available inside methods.
        $this->username = $username;
        $this->gender = $gender;
        $this->email = $email;
    }

}


//Note: Objects of a class are always created using the new keyword
$username = new Username("High Bee", "Male", "osunjimi@gmail.com");

echo $username->username ."<br>";
echo $username->gender ."<br>";
echo $username->email ."<br>";

//using the __destruct function
class Fruit{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


//A destructor is called when the object is destructed or the script is stopped or exited.
    // function __destruct()
    // {
    //     echo "The name of the fruit is {$this->name} and the color is {$this->color} <br>";
    // }
}

$pawpaw = new Fruit('pawpaw','yellow');


//access modifiers in php
//access modifiers (also known as visibility keywords) are used to define the access level of properties (variables), methods (functions), and classes. They control where and how a property or method can be accessed in your code. PHP has three main access modifiers:

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class


//public property
// class Department {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }
// }
//  $department = new Department("Computer Science");

//  echo "i'm in {$department->name} department <br>";


//protected property

class State{
    protected $name;
    
    function __construct($name)
    {
        $this->name = $name;
    }
    
    // Public getter method to access the protected $name property
    public function getName()
    {
        return $this->name;
    }
}   

class Country extends State {
    public $countryName;

function __construct($name, $countryName)
{
    parent::__construct($name); // Call the parent constructor to initialize $name
    $this->countryName = $countryName;
}
}

$location = new Country("Lagos","Nigeria");

//echo "i'm from {$location->name} {$location->countryName}";// will return error because the state name can't be accessed directly. it can only be accessed through the getName function

echo "i'm from {$location->getName()} {$location->countryName} <br>";


//private property
class Newname {
    private $name;

    function __construct($newName)
    {
        $this->name = $newName;
    }
    public function getName(){
        return $this->name;
    }
}

$intro = new Newname("Ibrahim");

//echo "my name is {$intro->name}"; // will bring out error(Cannot access private property Newname)


echo "my name is {$intro->getName()} <br>";// will work

//protected property

class School{
    protected $school;

    function __construct($school)
    {
        $this->school = $school;
    }
    public function schoolName(){
        return $this->school;
    }
}

$school = new School("Ladoke Akintola University of Technology, Ogbomoso.");

//echo "I attend {$school->school}";//will bring out error (Cannot access protected property School::$school)
echo "I attend {$school ->schoolName()}<br>";



//inheritance
// inheritance is When a class derives from another class. The child class will inherit all the public and protected properties and methods from the parent class.

//An inherited class is defined by using the extends keyword.

class Institution{
    public $institute;

    function __construct($institute)
    {
        $this -> institute = $institute;
    }
   
}

class Department extends Institution{
    public $department;

    function __construct($institute, $department)
    {
        $this -> department = $department;
        parent::__construct($institute);

        //I can also use this but make sure the argument is declared in the constructor
        // $this -> institute = $institute;
    }
}

$department = new Department("LAUTECH","Computer Science");

echo "My Name Is Osunjimi Ibrahim From {$department->institute}. Department of {$department->department} <br>";



//The final keyword can be used to prevent class inheritance or to prevent method overriding.

// final class Food {
//     public $food;

//     function __construct($food)
//     {
//         $this -> food = $food;
//     }
// }

// class Carbohydrate extends Food{
//     public $carbohydrate;

//     function __construct($food, $carbohydrate)
//     {
//         parent::__construct($food);
//         $this -> carbohydrate = $carbohydrate;
//     }
// }

// $food = new Carbohydrate("Rice","Egg");

//echo "{$food->food} goes with {$food-> carbohydrate}"; //will bring out error (Class Carbohydrate cannot extend final class Food) because of the final keyword use to create the parent class





?>