<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
    </nav>
    <div class="container mt-4">
        <h1>Preencha seus dados</h1>
        <form id="curriculoForm" action="gerar_curriculo.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" class="form-control" id="idade" name="idade" readonly>
            </div>
            <div id="experiencias"></div>
            <button type="button" class="btn btn-secondary" id="addExperience">+ Adicionar Experiência</button>
            <button type="submit" class="btn btn-primary">Gerar Currículo</button>
        </form>
    </div>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
