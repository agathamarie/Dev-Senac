<?php
    // Veiculo
    class Veiculo{
        public $marca;
        public $modelo;
        public $cor;
        public $placa;
        public $tipo;
        public $ano;

        public function __construct($marca, $modelo, $cor, $placa, $tipo, $ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->placa = $placa;
            $this->tipo = $tipo;
            $this->ano = $ano;
        }

        public function Estado($estado){
            if (!isset($this->modelo)) {
                echo "Modelo não definido.<br>";
                return;
            }

            if($estado == "ligar"){
                echo $this->modelo . " ligou<br>"; 
            }
            else if($estado == "desligar"){
                echo $this->modelo . " desligou<br>"; 
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }

        public function Andar($direcao){
            if (!isset($this->modelo)) {
                echo "Modelo não definido.<br>";
                return;
            }

            if($direcao == "direita"){
                echo $this->modelo . " andou para direita<br>";
            }
            else if($direcao == "esquerda"){
                echo $this->modelo . " andou para esquerda<br>";
            }
            else if($direcao == "frente"){
                echo $this->modelo . " andou para frente<br>";
            }
            else if($direcao == "trás"){
                echo $this->modelo . " andou para trás<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }

        public function Andando($a){
            if (!isset($this->modelo)) {
                echo "Modelo não definido.<br>";
                return;
            }
            else if($a == "frear"){
                echo $this->modelo . " freiou<br>";
            }
            else if($a == "parar"){
                echo $this->modelo . " parou<br>";
            }
            else if($a == "estacionar"){
                echo $this->modelo . " estacionou<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }

        public function Funcoes($funcao){
            if (!isset($this->modelo)) {
                echo "Modelo não definido.<br>";
                return;
            }

            else if($funcao == "seta direita"){
                echo $this->modelo . " deu seta para a direita<br>";
            }
            else if($funcao == "seta esquerda"){
                echo $this->modelo . " deu seta para a esquerda<br>";
            }
            else if($funcao == "buzinar"){
                echo $this->modelo . " buzinou<br>";
            }
            else if($funcao == "acender"){
                echo $this->modelo . " acendou os faróis<br>";
            }
            else if($funcao == "apagar"){
                echo $this->modelo . " apagou os faróis<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }
    }
    
    // ---------- Carro
    class Carro extends Veiculo{
        public function Porta($acao){
            if($acao == "abrir porta esquerda"){
                echo $this->modelo . " abriu a porta esquerda<br>";
            }
            else if($acao == "abrir porta direita"){
                echo $this->modelo . " abriu a porta direita<br>";
            }
            else if($acao == "fechar porta esquerda"){
                echo $this->modelo . " fechou a porta esquerda<br>";
            }
            else if($acao == "fechar porta direita"){
                echo $this->modelo . " fechou a porta direita<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }
        public function Janela($acao){
            if($acao == "abrir janelas esquerda"){
                echo $this->modelo . " abriu as janelas esquerdas<br>";
            }
            else if($acao == "abrir janelas direita"){
                echo $this->modelo . " abriu as janelas direitas<br>";
            }
            else if($acao == "fechar janelas esquerda"){
                echo $this->modelo . " fechou as janelas esquerdas<br>";
            }
            else if($acao == "fechar janelas direita"){
                echo $this->modelo . " fechou as janelas direitas<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }
    }

    // ---------- Moto
    class Moto extends Veiculo{
        public function Manual($acao){
            if($acao == "colocar capacete"){
                echo "o dono da ". $this->modelo . " colocou capacete<br>";
            }
            else if($acao == "tirar capacete"){
                echo "o dono da ". $this->modelo . " tirou capacete<br>";
            }
            else{
                echo $this->modelo . " não fez nada<br>";
            }
        }
    }

    // objetos
    echo "<pre>";
    $carro1 = new Carro("Dodge", "Ram 2500", "Rosa", "AEA-2001", "Pickup", 2024);
    var_dump($carro1);
    echo "<pre>";
    $moto1 = new Moto("Kawasaki", "Ninja H2", "Preta e Verde", "AEA-0120", "Esportiva", 2023);
    var_dump($moto1);
    echo "<pre>";
    
    // fazendo os métodos - Carro
    $carro1->Porta("abrir porta esquerda");
    $carro1->Porta("fechar porta esquerda");
    $carro1->Janela("abrir janelas esquerda");
    $carro1->Estado("ligar");
    $carro1->Funcoes("acender");
    $carro1->Andar("frente");
    $carro1->Funcoes("seta esquerda");
    $carro1->Andar("esquerda");
    $carro1->Funcoes("seta direita");
    $carro1->Andar("direita");
    $carro1->Andando("frear");
    $carro1->Andando("parar");
    $carro1->Funcoes("buzinar");
    $carro1->Andar("frente");
    $carro1->Andando("estacionar");
    $carro1->Funcoes("apagar");
    $carro1->Estado("desligar");
    $carro1->Porta("abrir porta esquerda");
    $carro1->Porta("fechar porta esquerda");
    $carro1->Janela("fechar janelas esquerda");
    echo "<pre>";

    // Fazendo os métodos - Moto
    $moto1->Manual("colocar capacete");
    $moto1->Estado("ligar");
    $moto1->Funcoes("acender");
    $moto1->Andar("frente");
    $moto1->Manual("tirar capacete");
    $moto1->Andando("parar");
    $moto1->Funcoes("apagar");
    $moto1->Estado("desligar");
    $moto1->Andando("estacionar");
    echo "</pre>";