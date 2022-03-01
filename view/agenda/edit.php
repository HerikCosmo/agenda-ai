<!-- <?php require __DIR__ . '/../header.php'; ?>
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
<?php require __DIR__ . '/../footer.php'; ?> -->

<?php require __DIR__ . '/../header.php'; ?>


<main>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 pt-5">
                <?php if (isset($_SESSION['ALERT'])) : ?>
                    <div class="alert alert-<?php echo $_SESSION['ALERT']['bg'] ?> my-2">
                        <?php echo $_SESSION['ALERT']['message'] ?>
                    </div>
                <?php unset($_SESSION['ALERT']);
                endif; ?>
                <div class="card bg-light">
                    <div class="card-header">
                        <h4>Editar contato</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="formCadastroAgenda" action="/contato-editar">
                            <input type="hidden" name="id" value="<?php echo $contact->id ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $contact->nome ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $contact->email ?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo $contact->telefone ?>">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" form="formCadastroAgenda" class="btn btn-primary">Editar</button>
                    </div>
                </div>
                <p class="text-light"><a href="/" class="link-light">Voltar</a></p>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../footer.php'; ?>