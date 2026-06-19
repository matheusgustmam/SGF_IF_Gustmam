<?php /** @var model\Cliete $cliente ;  */ ?>
<?php /** @var model\Contato $contato ; */ ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once "template/head.php"; ?>
    <title><?= $cliente->getNome() ?></title>
</head>
<body class="container">

<?php require_once "template/navbar.php"; ?>

<h1><?= $cliente->getNome() ?></h1>
<h2><?= $cliente->getCpf() ?></h2>
<h2><?= $cliente->getId() ?></h2>

<ul>
    <?php foreach ($cliente->getContatos() as $contato): ?>
    <li><?= $contato->getNome() ?></li>
    <?php endforeach; ?>
</ul>
<?php require_once "template/template-rodape.php"; ?>
</body>
</html>