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
                        <h4>Cadastrar contato</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="formCadastroAgenda" action="/contato-cadastrar">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" name="phone" id="phone" class="form-control" minlength="14" maxlength="15" placeholder="(99) 99999-9999">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" form="formCadastroAgenda" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                <p class="text-light"><a href="/" class="link-light">Voltar</a></p>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../footer.php'; ?>