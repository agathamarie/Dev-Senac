<?php
// const :)

class Pessoa{
    const nome = "Agatha";
    public $sobrenome;

    public function getNome(){
        echo self::nome;
    }
}

$agatha = new Pessoa();

echo $agatha::nome . "<br>";

echo $agatha->getNome();
echo "<br>";

echo $agatha->sobrenome = "Leite";

var_dump($agatha);

class Lorena extends Pessoa{
    const nome = "Lorena";

    public function getNomeParent(){
        echo parent::nome;
    }
}

$lorena = new Lorena();
echo "<br>";
var_dump($lorena);
echo "<br>" . $lorena::nome . "<br>";
$lorena->getNomeParent();

echo "<br>";
?>

<?php
// static :)
echo "<br>";

class Caique{
    public static $nome;

    public static function getNome(){
        echo self::$nome;
    }
    public function exibirNome(){
        echo self::$nome;
    }
}

echo Caique::$nome = "Caique" . "<br>";
Caique::getNome();
echo "<br>";
$caique = new Caique();
$caique->exibirNome();

echo "<br>";
?>

<?php
echo "<br>";
// interface & implement

interface Info{
    public function getInfo();
}

class Produto implements Info{
    public $nome;
    public $preco;
    public $descricao;
    public $estoque;

    public function __construct($nome, $preco, $descricao, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->estoque = $estoque;
    }

    public function getInfo(){
        echo "Nome: ". $this->nome .", Preço: ". $this->preco .", Quantidade: ". $this->estoque .", Descrição: ". $this->descricao;
    }
}

$ovelhapelucia = new Produto("Ovelha de Pelúcia", 30.00, "Ovelha de pelúcia branca com 15cm de altura", 15);
echo "<pre>";
var_dump($ovelhapelucia);
echo "<pre>";
echo "<br>";
$ovelhapelucia->getInfo();

class Usuario implements Info{
    public $nome;
    public $nick;
    public $email;
    public $senha;

    public function __construct($nome, $nick, $email, $senha){
        $this->nome = $nome;
        $this->nick = $nick;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getInfo(){
        echo "Nome: ". $this->nome .", Nickname: ". $this->nick .", Email: ". $this->email .", Senha: ". $this->senha;
    }
}
echo "<br>";
$alyssonbryan = new Usuario("Alysson Bryan", "Venum", "aly2004@gmail.com", "Ab20012024");
$alyssonbryan->getInfo();
?>