<?php require __DIR__ . '/../header.php'; ?>

<main>
    <form action="/contato-cadastrar" method="post">
        <input type="text" placeholder="Nome" name="name">
        <input type="email" name="email" id="email">
        <input type="tel" name="phone" id="phone">
        <button type="submit">Enviar</button>
    </form>
</main>
<?php require __DIR__ . '/../footer.php'; ?>