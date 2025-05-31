<?php
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $formacoes = $_POST['formacoes'];
    $habilidades = $_POST['habilidades'];
    $experiencias = $_POST['experiencias'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            button#printButton, a.voltar {
                display: none !important;
            }
        }
    </style>
</head>
<body class="container mt-5">
    <h1 class="mb-4">Currículo de <?php echo htmlspecialchars($nome); ?></h1>

    <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars(date('d/m/Y', strtotime($data_nascimento))); ?></p>
    <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?> anos</p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
    <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>

    <h2>Formação Acadêmica</h2>
    <ul>
        <?php foreach($formacoes as $formacao): ?>
            <li><?php echo htmlspecialchars($formacao); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Habilidades</h2>
    <ul>
        <?php foreach($habilidades as $habilidade): ?>
            <li><?php echo htmlspecialchars($habilidade); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Experiências Profissionais</h2>
    <ul>
        <?php foreach($experiencias as $experiencia): ?>
            <li><?php echo htmlspecialchars($experiencia); ?></li>
        <?php endforeach; ?>
    </ul>

    <button id="printButton" class="btn btn-primary mt-3" onclick="window.print()">Imprimir/Salvar PDF</button>
    <a href="index.php" class="btn btn-secondary mt-3 voltar">Voltar</a>
</body>
</html>
