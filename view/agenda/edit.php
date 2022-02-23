<?php require __DIR__ . '/../start-html.php'; ?>
editar
<main>
    <form action="/contato-editar" method="post">
        <input type="hidden" name="id" value="<?php echo $contact->id ?>">
        <input type="text" placeholder="Nome" name="name" value="<?php echo $contact->nome ?>">
        <input type="email" name="email" id="email" value="<?php echo $contact->email ?>">
        <input type="tel" name="phone" id="phone" value="<?php echo $contact->telefone ?>">
        <button type="submit">Enviar</button>
    </form>
</main>
<?php require __DIR__ . '/../end-html.php'; ?>