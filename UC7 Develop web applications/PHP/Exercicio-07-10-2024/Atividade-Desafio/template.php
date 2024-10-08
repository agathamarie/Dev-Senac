<div class="card-funcionario">
    <header>
        <p>Nome: <?= $funcionario["nome"];?></p>
        <p>Cargo: <?= $funcionario["cargo"];?></p>
        <p>Idade: <?= $funcionario["idade"];?></p>
    </header>
    <fotter>
        <a href="tel: <?= $funcionario["telefone"];?>">Telefone: <?= $funcionario["telefone"];?></a>
        <span>ID: <?= $funcionario["id_fun"];?></span>
    </fotter>
</div>