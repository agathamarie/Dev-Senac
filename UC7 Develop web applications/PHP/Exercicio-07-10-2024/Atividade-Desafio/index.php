<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" id="formCadastro">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome">

        <label for="salario">Salário: </label>
        <input type="number" id="salario" name="salario">

        <select id="cargo" name="cargo">
            <option value="Gerente">Gerente</option>
            <option value="Analista de TI">Analista de TI</option>
            <option value="Desenvolvedora">Desenvolvedora</option>
            <option value="Designer">Designer</option>
            <option value="Assistente Administrativo">Assistente Administrativo</option>
            <option value="Consultor">Consultor</option>
        </select>
        

        <label for="idade">Idade: </label>
        <input type="number" id="idade" name="idade">

        <label for="tel">Telefone: </label>
        <input type="text" id="tel" name="tel">

        <input type="submit" id="buttonSubmit" value="Cadastrar">
    </form>
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
    ?>

    <section id="listarFuncionarios">
        <?php
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