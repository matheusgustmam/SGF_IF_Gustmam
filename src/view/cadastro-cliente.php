<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once 'templates/template-head.php'; ?>
    <title>Listagem de Clientes</title>
</head>
<body class="container pt-5">

<?php require_once 'templates/template-menu.php'; ?>

<div class="mt-5">
    <form id="formCadastroCliente" action="<?= BASE_URL. '/cleintes/cadastrar' ?>"
        method="POST"
        enctype="multipart/form-data">

    </form>
        <input type="hidden" name="id" value="<?= htmlspecialchars($cliente->getId() ?? '') ?>">


        <div class="row">
            <label for="nome" class="form-label">Nome</label>



            <input id="nome" name="nome" type="text" class="form-control" placeholder=" Insria seu nome">
                value="<?= htmlspecialchars($cliente->getCpf() ?? '') ?>">
        </div>

        <div class="row"></div>
            <label for="cidade_id" class="fomr-label">Cidade</label>
            <select id="cidade_id" name="cidade_id" class="form-control"></select>
                <option value="">Selecione uma cidade</option>
                <?php foreach ($cidades as $cidade) : ?>
                    <option value="<?= $cidade->getId() ?>"
                            <?= $cidade->getId() == $cliente->getEnderecdo()?->getCidade()?->getId()
                                ? 'selected' : "" ?>

                    ><?= $cidade->getNome() ?></option>
                <?php endforeach; ?>
        </select>
    </div>
    <div class="row">
        <label for="imagem_cliente" class="form-label">Foto</label>
        <input id="imagem_cliente" name="imagem_cliente"
               type="file" class="form-control"
        >
    </div>

    <!-- -->
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="<?= BASE_URL.index() ?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    </form>
    </div>
    <?php require_once 'templates/template-rodape.php'; ?>
    </body>
    </html>
