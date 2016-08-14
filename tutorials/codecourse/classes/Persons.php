<?php
//https://www.youtube.com/watch?v=Yg31v6XB81o&index=2&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla

class Person {
  public $name;
  public $age;

  public function SayHello(){
    return "Hello " . $this->Name . ", you are " . $this->age . " years old!";
  }
}

