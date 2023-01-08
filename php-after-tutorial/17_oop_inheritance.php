<?php 


echo '<h1 style="color:gold ; text-align:center">hello from 17_oop_inheritance.php</h1>' ;


/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  private $name;
  public $email;
  public $password;

  // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  public function __construct($name, $email, $password) {
    // We assign the properties passed in from the outside to the properties we created inside the class.
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class.
  // function setName() {
  //   $this->name = $name;
  // }

  function getName() {
    return $this->name;
  }

  function login() {
    return "User $this->name is logged in.";
  }

  // Destructor is called when an object is destroyed or the end of the script.
  function __destruct() {
    echo "The user name is {$this->name}.";
  }
}

// Instantiate a new user
$user1 = new User('Brad', 'brad@gmail.com', '123456');

echo $user1->getName();
echo '<h1>user1 name is :'  . $user1->getName() . '</h1>' ;

echo $user1->login();
echo '<h1>user1 login is :'  . $user1->login() . '</h1>' ;




// Add a value to a property
// $user1->name = 'Brad';

var_dump($user1);
// echo $user1->name;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new employee('Andreea','andreea@gmail.com','123456','Manager');

echo $employee1->getTitle();

echo '<h2>employee1 name is :' . $employee1->getName() . '</h2>'  ;

echo '<h2>employee1 email is :' . $employee1->email . '</h2>'  ;

echo '<h2>employee1 password is :' . $employee1->password . '</h2>'  ;

echo '<h2>employee1 title is :' . $employee1->title . '</h2>'  ;