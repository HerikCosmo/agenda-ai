<?php require __DIR__ . '/../header.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <h3 class="text-start text-white py-3">Contatos</h3>
        </div>
        <div class="row" style="overflow-x: auto;">
            <div class="table-responsive">
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
                        <?php foreach ($contatos as $contato) : ?>
                            <tr>
                                <td><?php echo $contato->nome ?></td>
                                <td style="word-break: break-all;"><?php echo $contato->email ?></td>
                                <td><?php echo $contato->telefone ?></td>
                                <td colspan="2">
                                    <a class="btn btn-warning my-1" href="/contato-edicao?id=<?php echo $contato->id ?>">Editar</a>
                                    <a class="btn btn-danger my-1" href="/contato-excluir?id=<?php echo $contato->id ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../footer.php'; ?>