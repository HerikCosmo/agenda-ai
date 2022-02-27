<?php require __DIR__ . '/../header.php'; ?>
<main>
    <h3 class="text-center text-white py-5">AgendaAí</h3>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <?php if (isset($_SESSION['ALERT'])) : ?>
                    <div class="alert alert-<?php echo $_SESSION['ALERT']['bg'] ?> my-2">
                        <?php echo $_SESSION['ALERT']['message'] ?>
                    </div>
                <?php unset($_SESSION['ALERT']);
                endif; ?>
                <div class="card bg-light">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form id="formLoginAgenda" method="POST" action="/login-form">

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" form="formLoginAgenda" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
                <p class="text-light">Não possui uma conta? <a href="/login-cadastrar" class="link-light">Registre agora</a></p>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../footer.php'; ?>