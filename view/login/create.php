<?php require __DIR__ . '/../header.php'; ?>
<main>
    <h3 class="text-center text-white py-5">AgendaAí</h3>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-header">
                        <h4>Cadastrar usuário</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="formCadastroAgenda" action="/login-cadastro-usuario">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="nome" required>
                            </div>
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
                        <button type="submit" form="formCadastroAgenda" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                <p class="text-light">Já possui uma conta? <a href="/" class="link-light">Faça Login</a></p>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../footer.php'; ?>