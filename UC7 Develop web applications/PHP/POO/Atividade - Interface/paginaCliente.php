<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Interface</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include ('templateheader.php') ?>

    <section id="secFormulario">
        <p>Cadastre um novo cliente</p>

        <form method="post" id="formCadastro">
            <div class="row">
                <input type="text" class="input" name="nome" placeholder="Nome: ">
            </div>
            <div class="row">
                <input type="text" class="input" name="email" placeholder="Email: ">
            </div>
            <div class="row">
                <input type="text" class="input" name="telefone" placeholder="Telefone/Celular: ">
            </div>
            <div class="row">
                <input type="text" class="input" name="cpf" placeholder="CPF: ">
            </div>
            <div class="rowbutton">
                <input type="submit" id="buttonSubmit" value="Cadastrar">
            </div>
        </form>

        <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'biblioteca';
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

            // Mudança para $_POST
            if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['cpf'])) {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $cpf = $_POST['cpf'];

                $query = "INSERT INTO usuario (nome, email, telefone, cpf) VALUES ('$nome', '$email', '$telefone', '$cpf')";

                if (mysqli_query($conexao, $query)) {
                    echo "Novo cliente cadastrado com sucesso.";
                } else {
                    echo "Erro: " . mysqli_error($conexao);
                }

                mysqli_close($conexao);
            }
        ?>
    </section>

    <section id="listarClientes" class="container">
        <div id="filtro">
            <form id="filtroform" method="get">
                <div class="rowfun">      
                    <input type="text" class="input" name="cpf" placeholder="CPF: ">
                </div>
                <input id="buttonFiltrar" type="submit" value="Filtrar">
            </form>
        </div>

        <?php
            // Conexão com o banco de dados
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'biblioteca';
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

            if (isset($_GET['cpf']) && !empty($_GET['cpf'])) {
                $filtrocpf = $_GET['cpf'];
                $selectclientes = $conexao->query("SELECT * FROM usuario WHERE cpf = '$filtrocpf'");
            } else {
                $selectclientes = $conexao->query('SELECT * FROM usuario');
            }

            if ($selectclientes) {
                $rowsclientes = $selectclientes->fetch_all(MYSQLI_ASSOC);
                function renderTemplate($cliente) {
                    include 'templateCliente.php';
                }
                
                foreach ($rowsclientes as $cliente) {
                    renderTemplate($cliente);
                }
            } else {
                echo "Erro na consulta: " . $conexao->error;
            }

            mysqli_close($conexao);
        ?>
    </section>
</body