<?php require __DIR__ . '/../header.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <h3 class="text-start text-white py-3">Contatos</h3>
        </div>
        <div class="row">
            
            <table class="table bg-light">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($contatos as $contato): ?>
                    <tr>
                        <td><?php echo $contato->nome ?></td>
                        <td><?php echo $contato->email ?></td>
                        <td><?php echo $contato->telefone ?></td>
                        <td><a class="btn btn-warning"href="/contato-edicao?id=<?php echo $contato->id ?>">Editar</a></td>
                        <td><a class="btn btn-danger"href="/contato-excluir?id=<?php echo $contato->id ?>">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo $_SESSION['mensagem'] ?? '' ?>
    <!-- <?php foreach($contatos as $contato){ ?>
        <?php echo $contato->nome ?> |
        <a href="/contato-edicao?id=<?php echo $contato->id ?>">Editar</a> |
        <a href="/contato-excluir?id=<?php echo $contato->id ?>">Excluir</a>
        <br>        
    <?php } ?>  -->
</main>
<?php require __DIR__ . '/../footer.php'; ?>
