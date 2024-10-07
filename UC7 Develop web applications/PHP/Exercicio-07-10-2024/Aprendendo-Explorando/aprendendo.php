<?php
    # Setando as informações do banco de dados:
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodados = 'empresa';
    
    # Criando um objeto conectando o banco de dados:
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);
    
    # Acessando um método (use ->):
    // $consulta = $conexao->query('insert into funcionario(nome, cargo, idade, salario, telefone) values
    // ("Adrian Gaspar", "Estagiário", 17, 2600, "(67)9920062028")');
    # Para visualizar se foi realizado ou não:
    // var_dump($consulta);

    # Selecionar as informações da tabela
    $selectfuncionarios = $conexao->query('select * from funcionario');
    # Visualizar as informações, veremos como array + gambiarra para visualizar
    echo '<pre>';
    var_dump($selectfuncionarios->fetch_all()); //fetch-busca all-todos os elementos
    echo '</pre>';

    # Fechar conexão
    $conexao->close();
?>