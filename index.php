<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Gerador de Currículo</h1>
        <form action="gerar_curriculo.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="idade" class="form-label">Idade:</label>
                    <input type="text" name="idade" id="idade" class="form-control" readonly>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Experiências Profissionais:</label>
                <div id="experiencias">
                    <input type="text" name="experiencias[]" class="form-control mb-2" placeholder="Descreva sua experiência">
                </div>
                <button type="button" id="addExperiencia" class="btn btn-sm btn-primary">+</button>
            </div>

            <div class="mb-3">
                <label class="form-label">Formação Acadêmica:</label>
                <div id="formacoes">
                    <input type="text" name="formacoes[]" class="form-control mb-2" placeholder="Informe sua formação">
                </div>
                <button type="button" id="addFormacao" class="btn btn-sm btn-primary">+</button>
            </div>

            <div class="mb-3">
                <label class="form-label">Habilidades:</label>
                <div id="habilidades">
                    <input type="text" name="habilidades[]" class="form-control mb-2" placeholder="Informe uma habilidade">
                </div>
                <button type="button" id="addHabilidade" class="btn btn-sm btn-primary">+</button>
            </div>

            <button type="submit" class="btn btn-success">Gerar Currículo</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Validação Bootstrap
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        // Adicionar campos dinâmicos
        $('#addExperiencia').click(function() {
            $('#experiencias').append('<input type="text" name="experiencias[]" class="form-control mb-2" placeholder="Descreva sua experiência">');
        });

        $('#addFormacao').click(function() {
            $('#formacoes').append('<input type="text" name="formacoes[]" class="form-control mb-2" placeholder="Informe sua formação">');
        });

        $('#addHabilidade').click(function() {
            $('#habilidades').append('<input type="text" name="habilidades[]" class="form-control mb-2" placeholder="Informe uma habilidade">');
        });

        // Cálculo de idade
        $('#data_nascimento').on('change', function() {
            let data = new Date($(this).val());
            let hoje = new Date();
            let idade = hoje.getFullYear() - data.getFullYear();
            let m = hoje.getMonth() - data.getMonth();
            if (m < 0 || (m === 0 && hoje.getDate() < data.getDate())) {
                idade--;
            }
            $('#idade').val(idade);
        });
    </script>
</body>
</html>