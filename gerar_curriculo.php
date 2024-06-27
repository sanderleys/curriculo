<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $idade = $_POST['idade'];
    $experiencias = isset($_POST['empresa']) ? $_POST['empresa'] : [];
    
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo de <?php echo $nome; ?></title>
        <link rel="stylesheet" href="vendor/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1><?php echo $nome; ?></h1>
            <p>Data de Nascimento: <?php echo date('d/m/Y', strtotime($dataNascimento)); ?></p>
            <p>Idade: <?php echo $idade; ?> anos</p>
            <h2>Experiências Profissionais</h2>
            <?php foreach ($experiencias as $index => $empresa): ?>
                <div>
                    <h3><?php echo $empresa; ?></h3>
                    <p>Cargo: <?php echo $_POST['cargo'][$index]; ?></p>
                    <p>Início: <?php echo date('d/m/Y', strtotime($_POST['inicio'][$index])); ?></p>
                    <p>Fim: <?php echo !empty($_POST['fim'][$index]) ? date('d/m/Y', strtotime($_POST['fim'][$index])) : 'Atualmente'; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <script>
            window.print();
        </script>
    </body>
    </html>
    <?php
    echo ob_get_clean();
}
?>
