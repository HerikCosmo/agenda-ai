<?php require __DIR__ . '/../start-html.php'; ?>

<main>
    <?php echo $_SESSION['mensagem'] ?? '' ?>
    <?php foreach($contatos as $contato){
        echo $contato->nome . "<br>";
    } ?>
</main>
<?php require __DIR__ . '/../end-html.php'; ?>
