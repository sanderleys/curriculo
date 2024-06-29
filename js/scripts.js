$(document).ready(function() {
    function calcularIdade(dataNascimento) {
        var hoje = new Date();
        var nascimento = new Date(dataNascimento);
        var idade = hoje.getFullYear() - nascimento.getFullYear();
        var m = hoje.getMonth() - nascimento.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
            idade--;
        }
        return idade;
    }

    $('#dataNascimento').on('change', function() {
        var idade = calcularIdade($(this).val());
        $('#idade').val(idade);
    });

    $('#addTelefone').on('click', function() {
        var telefoneHtml = `
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" name="telefone[]">
            </div>
        `;
        $('#telefones').append(telefoneHtml);
    });

    $('#addCurso').on('click', function() {
        var cursoHtml = `
            <div class="form-group">
                <label for="curso">Curso:</label>
                <textarea class="form-control" name="curso[]"></textarea>
            </div>
        `;
        $('#cursosComplementares').append(cursoHtml);
    });

    $('#addIdioma').on('click', function() {
        var idiomaHtml = `
            <div class="form-group">
                <label for="idioma">Idioma:</label>
                <textarea class="form-control" name="idioma[]"></textarea>
            </div>
        `;
        $('#idiomas').append(idiomaHtml);
    });

    $('#addExperience').on('click', function() {
        var experienciaHtml = `
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
        `;
        $('#experiencias').append(experienciaHtml);
    });
});
