<?php

class Vertebrates{
    public function __construct(){
        $this->vertebratiSpecializzione();
    }
    protected function vertebratiSpecializzione(){
        echo('sono un vertebrato');
    }
}

class warmBlood extends Vertebrates{
    public function __construct(){
        $this->vertebratiSpecializzione();
        $this->warmBloodSpecializzazione();
    }
    protected function warmBloodSpecializzazione(){
        echo('ho il sangue caldo');
    }
}

class coldBlood extends Vertebrates{
    public function __construct(){
       $this->vertebratiSpecializzione();
       $this->coldBloodSpecializzazione();
    }
    protected function coldBloodSpecializzazione(){
        echo('sono un animale a sangue freddo');
    }
}

class Mammals extends warmBlood{
    public function __construct(){
        $this->vertebratiSpecializzione();
        $this->warmBloodSpecializzazione();
        $this->mammalsSpecializzazione();
    }
    protected function mammalsSpecializzazione(){
        echo('sono un mammifero');
    }
}

class Birds extends warmBlood{
    public function __construct(){
        $this->vertebratiSpecializzione();
        $this->warmBloodSpecializzazione();
        $this->birdsSpecializzazione();
    }
    protected function birdsSpecializzazione(){
        echo('sono un uccello');
    }
}

class Reptiles extends coldBlood{
    public function __construct(){
        $this->vertebratiSpecializzione();
       $this->coldBloodSpecializzazione();
       $this->reptilesSpecializzazione();
    }
    protected function reptilesSpecializzazione(){
        echo('sono un rettile');
    }
}

class Fish extends coldBlood{
    public function __construct(){
        $this->vertebratiSpecializzione();
        $this->coldBloodSpecializzazione();
        $this->fishSpecializzazione();
    }
    protected function fishSpecializzazione(){
        echo('sono un pesce');
    }
}

class Amphibians extends coldBlood{
    public function __construct(){
        $this->vertebratiSpecializzione();
        $this->coldBloodSpecializzazione();
        $this->amphibiansSpecializzazione();
    }
    protected function amphibiansSpecializzazione(){
        echo('sono un anfibio');
    }
}



$carpa = new Fish();
$vertebratoGenerico = new Vertebrates();
$animaleSangueCaldo = new WarmBlood();
$animaleSangueFreddo = new ColdBlood();
$cane = new Mammals();
$pappagallo = new Birds();
$cobra = new Reptiles();
$rana = new Amphibians();

