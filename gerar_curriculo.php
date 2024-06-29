<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefones = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $estadoCivil = $_POST['estadoCivil'];
    $objetivoProfissional = $_POST['objetivoProfissional'];
    $resumoQualificacoes = $_POST['resumoQualificacoes'];
    $formacaoAcademica = $_POST['formacaoAcademica'];
    $cursos = $_POST['curso'];
    $idiomas = $_POST['idioma'];
    $experiencias = [];

    if (!empty($_POST['empresa'])) {
        for ($i = 0; $i < count($_POST['empresa']); $i++) {
            if (!empty($_POST['empresa'][$i])) {
                $experiencias[] = [
                    'empresa' => $_POST['empresa'][$i],
                    'cargo' => $_POST['cargo'][$i],
                    'inicio' => $_POST['inicio'][$i],
                    'fim' => $_POST['fim'][$i],
                    'principaisFuncoes' => $_POST['principaisFuncoes'][$i]
                ];
            }
        }
    }
    ob_start ();

    ?>
<!DOCTYPE html>
    <html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/gerar_curriculo.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div id="conteudo">
    <h1 class="titulo">Currículo de <?php echo $nome; ?></h1>
    <p><strong>Data de Nascimento:</strong> <?php echo $dataNascimento; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Telefones:</strong> <?php echo implode(", ", $telefones); ?></p>
    <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
    <p><strong>Estado Civil:</strong> <?php echo $estadoCivil; ?></p>
    <h2>Objetivo Profissional</h2>
    <p><?php echo nl2br($objetivoProfissional); ?></p>
    <h2>Resumo das Qualificações</h2>
    <p><?php echo nl2br($resumoQualificacoes); ?></p>
    <h2>Formação Acadêmica</h2>
    <p><?php echo nl2br($formacaoAcademica); ?></p>
    <?php if (!empty($cursos)) { ?>
        <h2>Cursos Complementares</h2>
        <ul>
            <?php foreach ($cursos as $curso) { ?>
                <li><?php echo nl2br($curso); ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <?php if (!empty($idiomas)) { ?>
        <h2>Idiomas</h2>
        <ul>
            <?php foreach ($idiomas as $idioma) { ?>
                <li><?php echo nl2br($idioma); ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <?php if (!empty($experiencias)) { ?>
        <h2>Experiências Profissionais</h2>
        <?php foreach ($experiencias as $experiencia) { ?>
            <h3><?php echo $experiencia['empresa']; ?></h3>
            <p><strong>Cargo:</strong> <?php echo $experiencia['cargo']; ?></p>
            <p><strong>Início:</strong> <?php echo $experiencia['inicio']; ?></p>
            <p><strong>Fim:</strong> <?php echo $experiencia['fim']; ?></p>
            <p><strong>Principais Funções:</strong> <?php echo nl2br($experiencia['principaisFuncoes']); ?></p>
        <?php } ?>
    <?php } ?>
    <?php
        $curriculoHtml = ob_get_clean();

        echo $curriculoHtml;
        // Para imprimir
           echo '<script>window.print();</script>';
        }
    ?>
    </div>
<body>
</html>