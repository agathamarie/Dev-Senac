<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando o Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="funcionarios">
        <?php
            // Função para renderizar o template passando a linha da tabela funcionario
            function renderTemplate($funcionario){
                # Incluindo o arquivo Template
                include 'template.php';
            }

            # Setando as informações do banco de dados:
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bancodados = 'empresa';
            # Criando um objeto conectando o banco de dados:
            $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados);

            # Criando objeto de mysqli_result
            $selectfuncionarios = $conexao->query('select * from funcionario');
            # Criando um objeto de resposta do mysqli_result para todos os itens
            $rowsFuncionarios = $selectfuncionarios->fetch_all(MYSQLI_ASSOC);

            # Fechar conexão
            $conexao->close();

            # Iterando sobre todos os itens da tabela
            // sempre que passar em um item de rowsFuncionarios esse item é guardado em uma nova varivel($funcionario)
            foreach ($rowsFuncionarios as $funcionario){
                // Sempre que passar em um funcionario, vai chamar o template colocando as informações da linha
                renderTemplate($funcionario);
            }
        ?>
    </section>
</body>
</html>