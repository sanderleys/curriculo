<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div id="telefones">
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" class="form-control" name="telefone[]" required>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" id="addTelefone">+ Adicionar Telefone</button>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="estadoCivil">Estado Civil:</label>
                <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" required>
            </div>
            <div class="form-group">
                <label for="objetivoProfissional">Objetivo Profissional:</label>
                <textarea class="form-control" id="objetivoProfissional" name="objetivoProfissional" required></textarea>
            </div>
            <div class="form-group">
                <label for="resumoQualificacoes">Resumo das Qualificações:</label>
                <textarea class="form-control" id="resumoQualificacoes" name="resumoQualificacoes" required></textarea>
            </div>
            <div class="form-group">
                <label for="formacaoAcademica">Formação Acadêmica:</label>
                <textarea class="form-control" id="formacaoAcademica" name="formacaoAcademica" required></textarea>
            </div>
            <div id="cursosComplementares">
                <div class="form-group">
                    <label for="curso">Curso:</label>
                    <textarea class="form-control" name="curso[]"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" id="addCurso">+ Adicionar Curso</button>
            <div id="idiomas">
                <div class="form-group">
                    <label for="idioma">Idioma:</label>
                    <textarea class="form-control" name="idioma[]"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" id="addIdioma">+ Adicionar Idioma</button>
            <div id="experiencias">
                <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" class="form-control" name="empresa[]">
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo:</label>
                    <input type="text" class="form-control" name="cargo[]">
                </div>
                <div class="form-group">
                    <label for="inicio">Início:</label>
                    <input type="date" class="form-control" name="inicio[]">
                </div>
                <div class="form-group">
                    <label for="fim">Fim:</label>
                    <input type="date" class="form-control" name="fim[]">
                </div>
                <div class="form-group">
                    <label for="principaisFuncoes">Principais Funções:</label>
                    <textarea class="form-control" name="principaisFuncoes[]"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" id="addExperience">+ Adicionar Experiência</button>
            <button type="submit" class="btn btn-primary">Gerar Currículo</button>
        </form>
    </div>
    <!-- <script src="vendor/bootstrap.bundle.min.js"></script> -->
    <script src="js/scripts.js"></script>
</body>
</html>



