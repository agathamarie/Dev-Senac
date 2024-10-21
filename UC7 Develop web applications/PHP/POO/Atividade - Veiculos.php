<?php

abstract class Veiculo {
    public $modelo;
    public $tipo;
    public $cor;
    public function __construct($modelo, $tipo, $cor){
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->cor = $cor;
    }

    abstract public function acelerar();
    abstract public function frear();
}

class Barco extends Veiculo{
    public function acelerar(){
        echo $this->modelo . " acelerou pela propulsão mecânica<br>";
    }
    public function frear(){
        echo $this->modelo . " freou reduzindo a potência do motor<br>";
    }
}
class Aviao extends Veiculo{
    public function acelerar(){
        echo $this->modelo . " acelerou aumentando a potência dos motores<br>";
    }
    public function frear(){
        echo $this->modelo . " freou usando reversores de empuxo e freios de roda<br>";
    }
}
class Moto extends Veiculo {
    public function acelerar() {
        echo $this->modelo . " acelerou girando o acelerador.<br>";
    }
    
    public function frear() {
        echo $this->modelo . " freou usando os freios dianteiros e traseiros.<br>";
    }
}
class Carro extends Veiculo {
    public function acelerar() {
        echo $this->modelo . " acelerou pressionando o pedal do acelerador.<br>";
    }
    
    public function frear() {
        echo $this->modelo . " freou usando o sistema de freios a disco.<br>";
    }
}
class Bicicleta extends Veiculo{
    public function acelerar(){
        echo $this->modelo . " acelerou usando a força de seu dono ao pedalar<br>";
    }
    public function frear(){
        echo $this->modelo . " freou usando os freios que contem no guidão<br>";
    }
}
class Skate extends Veiculo{
    public function acelerar(){
        echo $this->modelo . " acelerou usando as remadas de seu dono<br>";
    }
    public function frear(){
        echo $this->modelo . " freou usando a força do seu dono pressionando a sua parte de trás<br>";
    }
}
class Elevador extends Veiculo{
    public function acelerar(){
        echo $this->modelo . " não acelera<br>";
    }
    public function frear(){
        echo $this->modelo . " não freia<br>";
    }
}

$barco = new Barco("Barco", "Modelo X-200", "Branco");
$aviao = new Aviao("Avião", "Jet 9000", "Branco");
$carro = new Carro("Carro", "Turbo GT", "Rosa");
$moto = new Moto("Moto", "Speedster 300", "Preta");
$bicicleta = new Bicicleta("Bicicleta ", "Explorer 100", "Verde");
$skate = new Skate("Skate", "Skate Pro X", "Roxo");
$elevador = new Elevador("Elevador", "SmartLift 200", "Cinza");

$barco->acelerar();
$aviao->acelerar();
$carro->acelerar();
$moto->acelerar();
$bicicleta->acelerar();
$skate->acelerar();
$elevador->acelerar();

echo "<br>";

$barco->frear();
$aviao->frear();
$carro->frear();
$moto->frear();
$bicicleta->frear();
$skate->frear();
$elevador->frear();