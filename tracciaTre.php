<?php

class Car {
    private $num_telaio = 1234;

    public function __construct(){
    }

    protected function showPrivateAttribute(){
        echo $this->num_telaio;
    }
    }

  class Fiat extends Car {
    protected $license = 'ND 123 OJ';
    protected $name = 'Opel';

    public function __construct(){
    }

    public function showPrivateAttributeInAnotherClass(){
       $this->showPrivateAttribute();
    }

    public function showDescription(){
        echo('si chiama ' . $this->name  . 'con targa ' . $this->license . 'e numero di telaio ');
    }
    }

    $myCar = new Fiat();
   $myCar->showDescription();


    




 