<?php

interface Crud{
    public function Create();
    public function Read();
    public function Update();
    public function Delete();
}

class Usuario{
    public $nome;
    public $email;
    public $telefone;
    public $cpf;
    public $listaLivros = [];

    const MAX_EMPRESTIMO = 3;

    public function __construct($usuario){
        $this->nome = $usuario['nome'];
        $this->email = $usuario['email'];
        $this->telefone = $usuario['telefone'];
        $this->senha = $usuario['cpf'];
    }

    public function pegarEmprestado($livro){
        if(count($this->listaLivros) >= self::MAX_EMPRESTIMO){
            return;
        }
        array_push($this->listaLivros, $livro);
    }

    public function devolverEmprestimo($livro){
        if(count($this->listaLivros) == 0){
            echo "Não há livros para devolver";
            return;
        }
        $key = array_search($livro, $this->listaLivros);
        if($key !== false){
            unset($this->listaLivros[$key]);
        }
    }

    public function Create($usuario){
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bancodados = 'biblioteca';
        $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

        $query = "INSERT INTO usuario (nome, email, telefone, cpf) VALUES ('$nome', '$email', '$telefone', '$cpf')";

        if (mysqli_query($conexao, $query)) {
            echo "Novo cliente cadastrado com sucesso.";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    }
}


class Livro{
    public $titulo;
    public $autor;
    public $genero;
    public $isbn;
    public $usuarioEmprestado;
    public $status = 'Disponível'; 

    public function __construct($livro){
        $this->titulo = $livro['titulo'];
        $this->autor = $livro['autor'];
        $this->genero = $livro['genero'];
        $this->isbn = $livro['isbn'];
    }

    public function emprestarLivro($usuario){
        if($this->status == 'Indisponivel'){
            echo 'Livro já está emprestado';
            return;
        }
        $this->usuarioEmprestado = $usuario;
        $this->status = 'Indisponivel';
    }

    public function devolverLivro($usuario){
        if($this->status == 'Disponível'){
            echo 'Livro não está emprestado';
            return;
        }
        $this->usuarioEmprestado = null;
        $this->status = 'Disponível';
    }
}

class Biblioteca{
    public static function Emprestar($livro, $usuario){
        $livro->emprestarLivro($usuario);
        $usuario->pegarEmprestado($livro);
    }

    public static function Devolver($livro, $usuario){
        $livro->devolverLivro($usuario);
        $usuario->devolverEmprestimo($livro);
    }
}