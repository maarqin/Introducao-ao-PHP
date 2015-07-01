<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de pessoa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Cadastro de pessoa</h1>

        <hr/>

        <form action="/modulos/pessoa.php" method="post" class="form-horizontal" autocomplete="off">

            <input type="hidden" name="action">
            <input type="hidden" name="id">

            <div class="form-group">
                <div class="col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="">
                </div>
                <div class="col-md-2">
                    <label>Data Admissão</label>
                    <input type="date" class="form-control" name="dtAdmissao" value="">
                </div>
                <div class="col-md-2">
                    <label>Data Demissão</label>
                    <input type="text" class="form-control" name="dtDemissao">
                </div>
                <div class="col-md-2">
                    <label>Data de nascimento</label>
                    <input type="text" class="form-control" name="dtNascimento">
                </div>
                <div class="col-md-2">
                    <label>Sexo</label>
                    <input type="text" class="form-control" name="sexo">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="col-md-3">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="bairro">
                </div>
                <div class="col-md-2">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="cep">
                </div>
                <div class="col-md-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
                <div class="col-md-1">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="">
                </div>
                <div class="col-md-3">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="col-md-3">
                    <label>Celular</label>
                    <input type="text" class="form-control" name="celular">
                </div>
                <div class="col-md-2">
                    <label>Skype</label>
                    <input type="text" class="form-control" name="skype">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    <label>Salário</label>
                    <input type="text" class="form-control" name="salario">
                </div>
                <div class="col-md-4">
                    <label>Cargo</label>
                    <input type="text" class="form-control" name="cargo">
                </div>
                <div class="col-md-2">
                    <label>Agência</label>
                    <input type="text" class="form-control" name="agencia">
                </div>
                <div class="col-md-2">
                    <label>C/C</label>
                    <input type="text" class="form-control" name="conta">
                </div>
                <div class="col-md-2">
                    <label>Banco</label>
                    <input type="text" class="form-control" name="banco">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <a href="#" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>

    </div>

</body>
</html>