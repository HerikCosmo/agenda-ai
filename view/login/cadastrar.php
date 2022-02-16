<?php require __DIR__ . '/../start-html.php'; ?>
<h1>a</h1>
<main class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">Cadastrar</div>
            <card class="card-body">
                <form action="/login-cadastro-usuario" method="POST">
                    <label for="nome">nome: </label><input type="text" name="nome" id="nome">
                    <label for="email">email: </label><input type="email" name="email" id="email">
                    <label for="senha">senha: </label><input type="password" name="senha" id="senha">
                    <input type="submit" value="Enviar">
                </form>
            </card>
        </div>
    </div>
</main>
<?php require __DIR__ . '/../end-html.php'; ?>