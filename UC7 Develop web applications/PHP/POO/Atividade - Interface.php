<?php

class Usuario implements Crud{
    public $nome;
    public $email;
    public $senha;
    const max_emprestimo = 3;
    public $emprestimo = 0;

    public function __construct($nome, $email, $senha, $emprestimo){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->emprestimo = $emprestimo;

        $this->Cadastrar($nome);
    }
    public function Cadastrar($nome){      
        // inserir o sql
        echo "Usuario cadastrado com sucesso!<br>";
    }

}

interface Crud{
    public function Cadastrar();
    /*
    public function Read();
    public function Update();
    public function Delete();*/
}

class Biblioteca{
    static function Emprestar(Usuario $usuario,Livro $titulo){
        if ($usuario->$emprestimo <=10){
            $usuario->emprestimo++;
            echo "{$usuario->$nome} pegou o livro {$titulo->$titulo} emprestado.<br>";
        }
        else{
            echo "Este usuario já atingiu o limite máximo de emprestimo.<br>";
        }
    }
    static function Devolver(Usuario $usuario, Livro $titulo){
        $usuario->emprestimo--;
        echo "{$usuario->$nome} devolveu o livro {$titulo->$titulo}.<br>";
    }
}

class Livro extends Biblioteca implements Crud{
    public $titulo;
    public $autor;
    public $genero;

    public function __construct($titulo, $autor, $genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero; 

        $this->Cadastrar($titulo);
    }
    public function Cadastrar($titulo){      
        echo "Livro cadastrado com sucesso!<br>";
    }

    public function Emprestar(Usuario $nome, Livro $titulo){
        $biblioteca->Emprestar();
    }
    public function Devolver(Usuario $nome, Livro $titulo){
        $biblioteca->Devolver();
    }

}



$biblioteca = new Biblioteca();
$livro = new Livro("Livro", "autor", "genero");
