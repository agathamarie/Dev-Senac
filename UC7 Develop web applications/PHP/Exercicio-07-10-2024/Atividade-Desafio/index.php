<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-desafio.css">
</head>
<body>
    <header  id="header-site">
        <div id="img-header">
            <img src="logo.png" alt="Logo Microsoft">
        </div>

        <nav id="nav-header">
            <div id="box-btn-hamburguer">
                <button id="btn-hamburguer">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>
            </div>

            <ul>
                <li class="item-nav-header">
                    <a href="#">Inicio</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Vagas</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Sobre</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Suporte</a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="secFormulario" class="container">
        <div id="ctd-form">
            <h2>Cadastre o Funcionário</h2> 
            <p>Cadastre o novo funcionário e o deseje boas-vindas!</p>
        </div>

        <form method="get" id="formCadastro">
            <div class="row">
                <input type="text" class="input" id="input-nome" name="nome" placeholder="Nome: ">
            </div>

            <div class="row">
                <input type="number" class="input" id="input-salario" name="salario" placeholder="Salário: ">
            </div>

            <div class="row">    
                <input type="number" class="input" id="input-idade" name="idade" placeholder="Idade: ">
            </div>

            <div class="row">    
                <input type="text" class="input" id="input-telefone" name="telefone" placeholder="Telefone: ">
            </div>

            <div class="row">
                <select class="input" id="input-cargo" name="cargo" placeholder="Cargo: ">
                    <option value="Administrador de Banco de Dados">Administrador de Banco de Dados</option>
                    <option value="Administrador de Redes">Administrador de Redes</option>
                    <option value="Analista de Automação">Analista de Automação</option>
                    <option value="Analista de BI">Analista de BI</option>
                    <option value="Analista de Cloud Computing">Analista de Cloud Computing</option>
                    <option value="Analista de Dados">Analista de Dados</option>
                    <option value="Analista de Infraestrutura">Analista de Infraestrutura</option>
                    <option value="Analista de Segurança da Informação">Analista de Segurança da Informação</option>
                    <option value="Analista de Sistemas">Analista de Sistemas</option>
                    <option value="Analista de Suporte">Analista de Suporte</option>
                    <option value="Analista de TI">Analista de TI</option>
                    <option value="Arquiteto de Soluções">Arquiteto de Soluções</option>
                    <option value="Assistente Administrativo">Assistente Administrativo</option>
                    <option value="Cientista de Dados">Cientista de Dados</option>
                    <option value="Consultor de TI">Consultor de TI</option>
                    <option value="Consultor de Transformação Digital">Consultor de Transformação Digital</option>
                    <option value="Coordenador de TI">Coordenador de TI</option>
                    <option value="Desenvolvedor Back-end">Desenvolvedor Back-end</option>
                    <option value="Desenvolvedor Front-end">Desenvolvedor Front-end</option>
                    <option value="Desenvolvedor Full Stack">Desenvolvedor Full Stack</option>
                    <option value="Designer de UX/UI">Designer de UX/UI</option>
                    <option value="Engenheiro de Automação">Engenheiro de Automação</option>
                    <option value="Engenheiro de Cloud Computing">Engenheiro de Cloud Computing</option>
                    <option value="Engenheiro de Dados">Engenheiro de Dados</option>
                    <option value="Engenheiro de DevOps">Engenheiro de DevOps</option>
                    <option value="Engenheiro de Machine Learning">Engenheiro de Machine Learning</option>
                    <option value="Engenheiro de Redes">Engenheiro de Redes</option>
                    <option value="Engenheiro de Software">Engenheiro de Software</option>
                    <option value="Especialista em Big Data">Especialista em Big Data</option>
                    <option value="Especialista em Inteligência Artificial">Especialista em Inteligência Artificial</option>
                    <option value="Especialista em Segurança da Informação">Especialista em Segurança da Informação</option>
                    <option value="Gerente de Projetos de TI">Gerente de Projetos de TI</option>
                    <option value="Suporte Técnico">Suporte Técnico</option>
                    <option value="Tester">Tester</option>
                </select>
            </div>

            <input type="submit" id="buttonSubmit" value="Cadastrar">
        </form>
    </section>
    <?php
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bancodados = 'empresa';
        $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome'])) {
            $nome = $_GET['nome'];
            $salario = $_GET['salario'];
            $cargo = $_GET['cargo'];
            $idade = $_GET['idade'];
            $telefone = $_GET['telefone'];

            $query = "insert into funcionario (nome, cargo, idade, salario, telefone) values ('$nome', '$cargo', '$idade', '$salario', '$telefone')";
            mysqli_query($conexao, $query);

            // Redirecionar o usuário para uma página diferente
            header('Location: index.php');
            exit;
        }

        mysqli_close($conexao);
    ?>

    <section id="listarFuncionarios" class="container">
        <div id="filtro">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                <div class="rowfun">
                    <input type="text" class="input-fun" id="input-nome-fun" name="nome-fun" placeholder="Nome: ">
                </div>
                <div class="rowfun">
                    <select class="input-fun" id="input-cargo-fun" name="cargo-fun" placeholder="Cargo: ">
                        <option value="Administrador de Banco de Dados">Administrador de Banco de Dados</option>
                        <option value="Administrador de Redes">Administrador de Redes</option>
                        <option value="Analista de Automação">Analista de Automação</option>
                        <option value="Analista de BI">Analista de BI</option>
                        <option value="Analista de Cloud Computing">Analista de Cloud Computing</option>
                        <option value="Analista de Dados">Analista de Dados</option>
                        <option value="Analista de Infraestrutura">Analista de Infraestrutura</option>
                        <option value="Analista de Segurança da Informação">Analista de Segurança da Informação</option>
                        <option value="Analista de Sistemas">Analista de Sistemas</option>
                        <option value="Analista de Suporte">Analista de Suporte</option>
                        <option value="Analista de TI">Analista de TI</option>
                        <option value="Arquiteto de Soluções">Arquiteto de Soluções</option>
                        <option value="Assistente Administrativo">Assistente Administrativo</option>
                        <option value="Cientista de Dados">Cientista de Dados</option>
                        <option value="Consultor de TI">Consultor de TI</option>
                        <option value="Consultor de Transformação Digital">Consultor de Transformação Digital</option>
                        <option value="Coordenador de TI">Coordenador de TI</option>
                        <option value="Desenvolvedor Back-end">Desenvolvedor Back-end</option>
                        <option value="Desenvolvedor Front-end">Desenvolvedor Front-end</option>
                        <option value="Desenvolvedor Full Stack">Desenvolvedor Full Stack</option>
                        <option value="Designer de UX/UI">Designer de UX/UI</option>
                        <option value="Engenheiro de Automação">Engenheiro de Automação</option>
                        <option value="Engenheiro de Cloud Computing">Engenheiro de Cloud Computing</option>
                        <option value="Engenheiro de Dados">Engenheiro de Dados</option>
                        <option value="Engenheiro de DevOps">Engenheiro de DevOps</option>
                        <option value="Engenheiro de Machine Learning">Engenheiro de Machine Learning</option>
                        <option value="Engenheiro de Redes">Engenheiro de Redes</option>
                        <option value="Engenheiro de Software">Engenheiro de Software</option>
                        <option value="Especialista em Big Data">Especialista em Big Data</option>
                        <option value="Especialista em Inteligência Artificial">Especialista em Inteligência Artificial</option>
                        <option value="Especialista em Segurança da Informação">Especialista em Segurança da Informação</option>
                        <option value="Gerente de Projetos de TI">Gerente de Projetos de TI</option>
                        <option value="Suporte Técnico">Suporte Técnico</option>
                        <option value="Tester">Tester</option>
                    </select>
                </div>
                <input type="submit" value="Filtrar">
            </form>
        </div>
        <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'empresa';
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

            $filtro_nome = isset($_GET['nome-fun']) ? $_GET['nome-fun'] : '';
            $filtro_cargo = isset($_GET['cargo-fun']) ? $_GET['cargo-fun'] : '';

            function mostrarFuncionarios($conexao, $filtro_nome, $filtro_cargo){
                $sql = 'select * from funcionario';

                if ($filtro_nome != '' && $filtro_cargo != '') {
                    $sql .= " where nome like '%$filtro_nome%' and cargo = '$filtro_cargo'";
                }
                elseif ($filtro_nome != '') {
                    $sql .= " where nome like '%$filtro_nome%'";
                }
                elseif ($filtro_cargo != '') {
                    $sql .= " where cargo = '$filtro_cargo'";
                }

                $selectfuncionarios = $conexao->query($sql);
                $rowsFuncionarios = $selectfuncionarios->fetch_all(MYSQLI_ASSOC);

                function renderTemplate($funcionario){
                    include 'template.php';
                }

                foreach ($rowsFuncionarios as $funcionario){
                    renderTemplate($funcionario);
                }
            }

            mostrarFuncionarios($conexao, $filtro_nome, $filtro_cargo);

            mysqli_close($conexao);
        ?>
    </section>

</body>
</html>