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
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $contact->nome ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $contact->email ?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="text" name="phone" id="phone" class="form-control" minlength="14" maxlength="15" placeholder="(99) 99999-9999" value="<?php echo $contact->telefone ?>">
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