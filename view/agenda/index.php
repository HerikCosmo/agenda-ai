<?php require __DIR__ . '/../header.php'; ?>

<main>
    <?php echo $_SESSION['mensagem'] ?? '' ?>
    <?php foreach($contatos as $contato){ ?>
        <?php echo $contato->nome ?> |
        <a href="/contato-edicao?id=<?php echo $contato->id ?>">Editar</a> |
        <a href="/contato-excluir?id=<?php echo $contato->id ?>">Excluir</a>
        <br>        
    <?php } ?> 
</main>
<?php require __DIR__ . '/../footer.php'; ?>
