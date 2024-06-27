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

    $('#addExperience').on('click', function() {
        var experienciaHtml = `
            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" class="form-control" name="empresa[]" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo[]" required>
            </div>
            <div class="form-group">
                <label for="inicio">Início:</label>
                <input type="date" class="form-control" name="inicio[]" required>
            </div>
            <div class="form-group">
                <label for="fim">Fim:</label>
                <input type="date" class="form-control" name="fim[]">
            </div>
        `;
        $('#experiencias').append(experienciaHtml);
    });
});
