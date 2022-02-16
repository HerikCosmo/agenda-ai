<?php require __DIR__ . '/../start-html.php'; ?>

<section class="container d-flex justify-content-center">
    <?php if(isset($_SESSION['ERROR']) && $_SESSION !== null): ?>
        <div class="alert alert-danger my-2">
            <?php echo $_SESSION['ERROR'] ?>
        </div>
    <?php unset($_SESSION['ERROR']); endif; ?>
    <?php if(isset($_SESSION['MESSAGE']) && $_SESSION !== null): ?>
        <div class="alert alert-success my-2">
            <?php echo $_SESSION['MESSAGE'] ?>
        </div>
    <?php unset($_SESSION['MESSAGE']); endif; ?>
    <div class="card col-6">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form id="formLoginAgenda" method="POST" action="/login-form">

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Password</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
            </form>
        </div>
        <div class="card-footer d-flex justify-content-end">
        <button type="submit" form="formLoginAgenda" class="btn btn-primary">Entrar</button>
        </div>
        <a href="/login-cadastrar">Cadastrar Usuário</a>
    </div>
</section>

<?php require __DIR__ . '/../end-html.php'; ?>