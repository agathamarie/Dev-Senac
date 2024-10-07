<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formCadastro" action="" method="get">
        <label>                       
        <input type="text" name="nome">
        Salário: <input type="float" name="salario">
        Cargo: <input type="text" name="cargo">
        Idade: <input type="number" name="idade">
        Telefone: <input type="number" name="telefone">
        <input id="button-submit" type="submit">
    </form>

    <section id="listarFuncionarios">
        <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'empresa';
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);
            // ---------------

            $nome = $_GET['nome'];
            $salario = $_GET['salario'];
            $cargo = $_GET['cargo'];
            $idade = $_GET['idade'];
            $telefone = $_GET['telefone'];
            
            $conexao->query("insert into funcionario (nome, cargo, idade, salario, telefone) values 
            ('$nome', '$cargo', '$idade', '$salario', '$telefone');
            
            // ---------------
            function renderTemplate($funcionario){
                include 'template.php';
            }
            
            $selectfuncionarios = $conexao->query('select * from funcionario');
            $rowsFuncionarios = $selectfuncionarios->fetch_all(MYSQLI_ASSOC);
            $conexao->close();

            $conexao->close();

            foreach ($rowsFuncionarios as $funcionario){
                renderTemplate($funcionario);
            }

            if($button == 'estagiario'){
                # algo
            }
            else if($button == 'engenheiro de dados'){
                # algo
            }
            else if($button == 'desenvolvedor'){
                # algo
            }
            else{
                # algo
            }
        ?>
    </section>

</body>
</html>