<?php
    class Usuario{
        // atributos = são caracteristicas que nossos objetos terão
        public $nome;
        public $idade;
        public $email;
        public $senha;

        // métodos = ações que nossos objetos poderão executar
        public function Cadastrar(){
            if($this->email == "agatha@gmail.com" && $this->senha == "12345"){
                echo "Cadastrado com sucesso";
            }
            else{
                echo "Erro ao cadastrar";
            }
        }
    }

    // palavra reservada "new" para criar um novo objeto a partir da classe referida
    $agatha = new Usuario();

    // -> para indicar qual atributo ou método está sendo chamado
    $agatha->nome = "Agatha Marie";
    $agatha->idade = 18;
    $agatha->email = "agatha@gmail.com";
    $agatha->senha = "12345";
    // apenas para visualizar os atributos
    var_dump($agatha);

    $agatha->Cadastrar();

    // -----------------

    class Pessoa{
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        // para setar a variavel $n como o $nome
        public function setNome($n){
            $this->nome = $n;
        }
        // irá retornar o que tem dentro de nome
        public function getNome(){
            return $this->nome;
        }

        // método construtor
        public function __construct($nome, $idade, $altura, $peso){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;

            $this->setNome($nome);
        }

        public function Andar(){
            echo $this->nome . " andou";
        }
        public function Falar(){
            echo $this->nome . " falou";
        }
        public function Comer(){
            echo $this->nome . " comeu";
        }
        public function Dormir(){
            echo $this->nome . " dormiu";
        }
    }

    //setando o nome
    $lorena = new Pessoa();
    $lorena->setNome("Lorena");
    // retornando o nome
    echo $lorena->getNome();

    // Para métodos construtores:
    $lorena = new Pessoa("Lorena", 19, 165, 50);
    var_dump($lorena);

    $lorena->Andar();
    $lorena->Dormir();