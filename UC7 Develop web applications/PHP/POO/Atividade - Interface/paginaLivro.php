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
        <p>Cadastre um novo livro</p>

        <form method="post" id="formCadastro">
            <div class="row">
                <input type="text" class="input" name="titulo" placeholder="Titulo: ">
            </div>
            <div class="row">
                <input type="text" class="input" name="autor" placeholder="Autor: ">
            </div>
            <div class="row">
                <input type="text" class="input" name="genero" placeholder="Gênero: ">
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

            if (isset($_POST['titulo'], $_POST['autor'], $_POST['genero'])) {
                $nome = $_POST['titulo'];
                $email = $_POST['autor'];
                $telefone = $_POST['genero'];

                $query = "INSERT INTO livro (titulo, autor, genero) VALUES ('$titulo', '$autor', '$genero')";

                if (mysqli_query($conexao, $query)) {
                    echo "Livro cadastrado com sucesso.";
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
                    <input type="text" class="input" name="titulo" placeholder="Titulo: ">
                </div>
                <input id="buttonFiltrar" type="submit" value="Filtrar">
            </form>
        </div>

        <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'biblioteca';
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

            if (isset($_GET['titulo']) && !empty($_GET['titulo'])) {
                $filtrotitulo = $_GET['titulo'];
                $selectlivro = $conexao->query("SELECT * FROM livro WHERE titulo = '$filtrotitulo'");
            } else {
                $selectlivro = $conexao->query('SELECT * FROM livro');
            }

            if ($selectlivro) {
                $rowslivro = $selectlivro->fetch_all(MYSQLI_ASSOC);
                function renderTemplate($livro) {
                    include 'templateLivro.php';
                }
                
                foreach ($rowslivro as $livro) {
                    renderTemplate($livro);
                }
            } else {
                echo "Erro na consulta: " . $conexao->error;
            }

            mysqli_close($conexao);
        ?>
    </section>
</body