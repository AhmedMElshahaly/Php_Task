<?php
// class Author {
//     private $name;
//     private $email;
//     private $gender;

//     public function __construct($name, $email,$gender) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->gender = $gender;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getEmail() {
//         return $this->email;
//     }

//     function setEmail($email) {
//         $this->email = $email;
//     }

//     function getGender() {
//         return $this->gender;
//     }

//     function __toString() {
//         return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
//     }
// }

// class Book {
//     private $isbn;
//     private $name;
//     private $author; 
//     private $price;
//     private $qty = 0;

//     public function __construct($isbn, $name, $author, $price, $qty = 0) {
//         $this->isbn = $isbn;
//         $this->name = $name;
//         $this->author = $author;
//         $this->price = $price;
//         $this->qty = $qty;
//     }

//     function getIsbn() {
//         return $this->isbn;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getAuthor() {
//         return $this->author;
//     }

//     function getPrice() {
//         return $this->price;
//     }

//     function setPrice($price) {
//         $this->price = $price;
//     }

//     function getQty() {
//         return $this->qty;
//     }

//     function setQty($qty) {
//         $this->qty = $qty;
//     }

//     function getAuthorName() {
//         return $this->author->getName();
//     }

//     function __toString() {
//         return "Book[isbn={$this->isbn},name={$this->name},{$this->author},price={$this->price},qty={$this->qty}]";
//     }
// }

// $author = new Author("Ahmed", "ahmed@gmail.com","m");
// $book = new Book("123456789", "Learn PHP", $author, 150.75, 20);

// echo $book . "<br>";
// echo "Author's Name: " . $book->getAuthorName() . "<br>";



//**************************************** */








// trait Circle {
//     private $radius = 1.0;
//     private $color = "red";

 
//     function initCircle($radius = 1.0, $color = "red") {
//         $this->radius = $radius;
//         $this->color = $color;
//     }

 
//    function getRadius() {
//         return $this->radius;
//     }

//     function setRadius($radius) {
//         $this->radius = $radius;
//     }

//    function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function getArea() {
//         return pi() * pow($this->radius, 2);
//     }


//     function __toString() {
//         return "Circle[radius=" . $this->radius . ", color=" . $this->color . "]";
//     }
// }


// class Cylinder {
//     use Circle;

//     private $height = 1.0;


//     function __construct($radius = 1.0, $color = "red", $height = 1.0) {
//         $this->initCircle($radius, $color); 
//         $this->height = $height;
//     }


//     function getHeight() {
//         return $this->height;
//     }

//     function setHeight($height) {
//         $this->height = $height;
//     }

 
//     function getVolume() {
//         return $this->getArea() * $this->height;
//     }


//     function __toString() {
//         return "Cylinder[radius=" . $this->getRadius() . ", color=" . $this->getColor() . ", height=" . $this->height . "]";
//     }
// }


// $cylinder = new Cylinder(3, "blue", 5);
// echo $cylinder . "<br>";
// echo "Volume: " . $cylinder->getVolume() . "<br>";



//*************************************************// */


// abstract class Person {
//     protected $name;
//     protected $address;

//     function __construct($name, $address) {
//         $this->name = $name;
//         $this->address = $address;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getAddress() {
//         return $this->address;
//     }

//     function setAddress($address) {
//         $this->address = $address;
//     }

//     abstract function __toString();
// }


// class Student extends Person {
//     private $program;
//     private $year;
//     private $fee;

//     function __construct($name, $address, $program, $year, $fee) {
//         parent::__construct($name, $address);
//         $this->program = $program;
//         $this->year = $year;
//         $this->fee = $fee;
//     }

//     function getProgram() {
//         return $this->program;
//     }

//     function setProgram($program) {
//         $this->program = $program;
//     }

//     function getYear() {
//         return $this->year;
//     }

//     function setYear($year) {
//         $this->year = $year;
//     }

//     function getFee() {
//         return $this->fee;
//     }

//     function setFee($fee) {
//         $this->fee = $fee;
//     }

//     function __toString() {
//         return "Student[Person[name={$this->name},address={$this->address}],program={$this->program},year={$this->year},fee={$this->fee}]";
//     }
// }


// class Staff extends Person {
//     private $school;
//     private $pay;

//     function __construct($name, $address, $school, $pay) {
//         parent::__construct($name, $address);
//         $this->school = $school;
//         $this->pay = $pay;
//     }

//     function getSchool() {
//         return $this->school;
//     }

//     function setSchool($school) {
//         $this->school = $school;
//     }

//     function getPay() {
//         return $this->pay;
//     }

//     function setPay($pay) {
//         $this->pay = $pay;
//     }

//     function __toString() {
//         return "Staff[Person[name={$this->name},address={$this->address}],school={$this->school},pay={$this->pay}]";
//     }
// }

// $student = new Student("ahmed", "menoufia", "Computer Science", 2023, 15000);
// echo $student . "<br>";

// $staff = new Staff("Ahmed", "Giza", "Engineering", 20000);
// echo $staff . "<br>";


//***********************************// */


// abstract class Shape {
//     protected $color = "red";
//     protected $filled = true;

//     function __construct($color = "red", $filled = true) {
//         $this->color = $color;
//         $this->filled = $filled;
//     }

//     function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function isFilled() {
//         return $this->filled;
//     }

//     function setFilled($filled) {
//         $this->filled = $filled;
//     }

//     abstract public function __toString();
// }




// class Circle extends Shape {
//     private $radius = 1.0;

//     function __construct($radius = 1.0, $color = "red", $filled = true) {
//         parent::__construct($color, $filled);
//         $this->radius = $radius;
//     }

//     function getRadius() {
//         return $this->radius;
//     }

//     function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     function getArea() {
//         return pi() * pow($this->radius, 2);
//     }

//     function getPerimeter() {
//         return 2 * pi() * $this->radius;
//     }

//     function __toString() {
//         return "Circle[Shape[color={$this->color}, filled={$this->filled}], radius={$this->radius}]";
//     }
// }



// class Rectangle extends Shape {
//     private $width = 1.0;
//     private $length = 1.0;

//     function __construct($width = 1.0, $length = 1.0, $color = "red", $filled = true) {
//         parent::__construct($color, $filled);
//         $this->width = $width;
//         $this->length = $length;
//     }

//     function getWidth() {
//         return $this->width;
//     }

//     function setWidth($width) {
//         $this->width = $width;
//     }

//     function getLength() {
//         return $this->length;
//     }

//     function setLength($length) {
//         $this->length = $length;
//     }

//     function getArea() {
//         return $this->width * $this->length;
//     }

//     function getPerimeter() {
//         return 2 * ($this->width + $this->length);
//     }

//     function __toString() {
//         return "Rectangle[Shape[color={$this->color}, filled={$this->filled}], width={$this->width}, length={$this->length}]";
//     }
// }




// class Square extends Rectangle {
//     function __construct($side = 1.0, $color = "red", $filled = true) {
//         parent::__construct($side, $side, $color, $filled);
//     }

//     function getSide() {
//         return $this->getWidth();
//     }

//     function setSide($side) {
//         $this->setWidth($side);
//         $this->setLength($side);
//     }

//     function setWidth($side) {
//         parent::setWidth($side);
//         parent::setLength($side);
//     }

//     function setLength($side) {
//         parent::setLength($side);
//         parent::setWidth($side);
//     }

//     function __toString() {
//         return "Square[Rectangle[Shape[color={$this->color}, filled={$this->filled}], width={$this->getWidth()}, length={$this->getLength()}]]";
//     }
// }





// $circle = new Circle(5, "blue", false);
// echo $circle . "<br>";
// echo "Area: " . $circle->getArea() . "<br>";
// echo "Perimeter: " . $circle->getPerimeter() . "<br>";

// $rectangle = new Rectangle(4, 6, "green", true);
// echo $rectangle . "<br>";
// echo "Area: " . $rectangle->getArea() . "<br>";
// echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";

// $square = new Square(4, "yellow", true);
// echo $square . "<br>";
// echo "Area: " . $square->getArea() . "<br>";
// echo "Perimeter: " . $square->getPerimeter() . "<br>";



//*********************** */

// // name space in oop ==> benifit ==> code//

// namespace MyApp\Models;


// class User {
//     public $name;

//     function __construct($name) {
//         $this->name = $name;
//     }

//     function greet() {
//         return "Hello, " . $this->name;
//     }
// }


// namespace MyApp\Controllers;

// use MyApp\Models\User;

// $user = new User("Ahmed");
// echo $user->greet();


// echo "<h1 style='text-align: center;'>Hello</h1>";

//__set(),__get(),__call()  ==> withcode//
//__set()//

// class User {
//     private $data = [];

  
//      function __set($name, $value) {
//         $this->data[$name] = $value;
//     }

  
//      function getData() {
//         return $this->data;
//     }
// }

// $user = new User();
// $user->name = "Ahmed"; 
// $user->age = 25; 

// print_r($user->getData()); 




//__get()//


// class User {
//     private $data = [
//         'name' => 'Ahmed',
//         'age' => 25
//     ];

//      function __get($name) {
//         if (isset($this->data[$name])) {
//             return $this->data[$name];
//         }
//         return null;
//     }
// }

// $user = new User();
// echo $user->name; 
// echo $user->age;  
// echo $user->email;




//__call()//

// class User {
    
//     function __call($method, $arguments) {
//         echo " $method : " . implode(", ", $arguments);
//     }
// }

// $user = new User();
// $user->sayHello("Hello", "World"); 


// ?>