<?php


echo '<h1 style="color:cornflowerblue ; text-align:center">hello from 17_oop.php</h1>' ;

/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/


class User{
//properties are attributes that belong to a class

// Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

public $name ;
public $email ;
public $address ;

}



// Instantiate a user object

$user1= new User() ;

$user1 -> name="Mihaela";
$user1 -> email="mih@gmail.com";
$user1 -> address="Calea Nationala 101";

//show on page what user is
var_dump($user1);

//---citeste valoarea unei proprietati , chei a unui obiect

echo $user1-> name ; 
echo $user1-> email ; 
echo $user1-> address ;

echo '<h3 style="color:cornflowerblue ; text-align:center"> user '  . $user1-> name .  ' has email : '  . $user1-> email . ' and lives on this address : ' .  $user1-> address . ' .</h3>' ; 

?>























<?php 

class User2{

public $name2 ;
public $email2 ;
public $address2 ;


//Methods is a function that belongs to a class

function set_Name($name2){
$this -> name2 = $name2;
}

function get_Name(){
    return $this -> name2 ;
}


}

// Instantiate a user object
$user2= new User2() ;
$userTwo= new User2() ;

//apel functie metoda pt a da value pt proprietate / cheie
$user2->set_Name('Gabriela');
$userTwo->set_Name('Alex');


//show on page what user is
var_dump($user2);

echo '<hr>' ;

var_dump($userTwo);

echo '<hr>' ;

//afisare in pagina

echo $user2 -> get_Name() ;
echo '<h3 style="color:magenta ; text-align:center">Name of user 2  is :' . $user2 -> get_Name() . '</h3>' ;


echo $userTwo -> get_Name() ;
echo '<h3 style="color:yellowgreen ; text-align:center">Name of user Two  is :' . $userTwo -> get_Name() . '</h3>' ;


?>












<?php

class User3{

public $name3 ;
public $email3 ;
public $password3 ;

//A constructor is a method that runs when an obj is created

public function __construct($name3, $email3, $password3){
    echo '<h2 style="text-align:center">constructor ran</h2>'  ;

// We assign the properties passed in from the outside to the properties we created inside the class.
$this->name3 = $name3;
$this->email3 = $email3;
$this->password3 = $password3;

}

//Method is a function that belongs to a class

// function set_Name3($name3){
//     $this -> name3 = $name3 ;
// }



// function get_Name3(){
//     return $this -> name3 ;
// }


}



// Instantiate a user object

$user3= new User3("Cornelia" , "corn@yahoo.com" , "cornelia123") ;


//show on page what user is
var_dump($user3);

//---citeste valoarea unei proprietati , chei a unui obiect

echo $user3-> name3 ; 
echo $user3-> email3 ; 
echo $user3-> password3 ;

echo '<h3 style="color:orange ; text-align:center"> user '  . $user3-> name3 .  ' has email : '  . $user3-> email3 . ' and password is : ' .  $user3-> password3 . ' .</h3>' ; 

?>



