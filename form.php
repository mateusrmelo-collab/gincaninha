<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="caixa">
    <div class="titulo">
        <h1>Cadastro</h1>
    </div>
<?php
if ($_POST) {

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $serie = $_POST['serie'];
    $modalidade = $_POST['modalidade'];

    $nome_limpo = strtolower($nome);
    $nome_limpo = preg_replace("/[^a-z0-9]/", "_", $nome_limpo);

    $arquivo_nome = "usuarios/" . $nome_limpo . ".txt";

    if (!is_dir("usuarios")) {
        mkdir("usuarios");
    }

    $arquivo = fopen($arquivo_nome, "w");

    fwrite($arquivo, "Nome: " . $nome . "\n");
    fwrite($arquivo, "Serie: " . $serie . "\n");
    fwrite($arquivo, "Sexo: " . $sexo . "\n");
    fwrite($arquivo, "Modalidade: " . $modalidade . "\n");

    fclose($arquivo);
}
?>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome do aluno" required>
        <input type="text" name="serie" list="series" placeholder="Série" required>
        <datalist id="series">
            <option value="9° ANO">
            <option value="1° EM">
            <option value="2° EM">
            <option value="3° EM">
        </datalist>
        <div class="radio-group">
            <label><input type="radio" name="sexo" value="Masculino" required> Masculino</label>
            <label><input type="radio" name="sexo" value="Feminino"> Feminino</label>
            <label><input type="radio" name="sexo" value="Outro"> Outro</label>
        </div>
    <select name="modalidade" required>
        <option value="" disabled selected>Selecione a modalidade</option>
        <option value="Vôlei">Vôlei</option>
        <option value="Pebolim">Pebolim</option>
        <option value="Cabo de Guerra">Cabo de Guerra</option>
        <option value="Penalidades">Penalidades</option>
        <option value="Tênis de Mesa">Tênis de Mesa</option>
        <option value="Embaixadinha">Embaixadinha</option>
        <option value="Campo Minado">Campo Minado</option>
        <option value="Lance Livre">Lance Livre</option>
        <option value="Queimada">Queimada</option>
    </select>
        <button type="submit">Cadastrar</button>
    </form>
    <div class="volta">
        <a href="index.php">
            <button>Voltar</button>
        </a>
    </div>
</div>
</body>
</html>