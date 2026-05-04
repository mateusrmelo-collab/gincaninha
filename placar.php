<?php
$arquivo = "pontos.json";

if (!file_exists($arquivo)) {
    $pontos = [
        "9ano" => 0,
        "1ano" => 0,
        "2ano" => 0,
        "3ano" => 0
    ];
    file_put_contents($arquivo, json_encode($pontos));
}

$pontos = json_decode(file_get_contents($arquivo), true);

if ($_POST) {
    $ganhador = $_POST['ganhador'];

    if (isset($pontos[$ganhador])) {
        $pontos[$ganhador]++;
    }

    file_put_contents($arquivo, json_encode($pontos));
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gincana</title>
    <link rel="stylesheet" href="placar.css">
</head>

<body>

    <header>
        <h1>Gincana esportiva</h1>
        <p>SESI-CE380</p>
    </header>
    <main>
        <div class="caixa">
            <div class="table">
            <table>
                <tr>
                    <th class="1">Série</th>
                    <th class="2">Pontuação</th>
                </tr>

                <tr>
                    <td>3 ano</td>
                    <td><?php echo $pontos['3ano']; ?></td>
                </tr>

                <tr>
                    <td>2 ano</td>
                    <td><?php echo $pontos['2ano']; ?></td>
                </tr>

                <tr>
                    <td>1 ano</td>
                    <td><?php echo $pontos['1ano']; ?></td>
                </tr>

                <tr>
                    <td>9 ano</td>
                    <td><?php echo $pontos['9ano']; ?></td>
                </tr>
            </table>
            </div>
            <div class="formula">
                <form method="POST">
                    <h1>Cadastrar jogo</h1>

                    <input type="text" placeholder="seu nome" name="nome">

                    <select name="serie1">
                        <option disabled selected>Série 1</option>
                        <option value="9ano">9 ano</option>
                        <option value="1ano">1 ano</option>
                        <option value="2ano">2 ano</option>
                        <option value="3ano">3 ano</option>
                    </select>

                    <select name="serie2">
                        <option disabled selected>Série 2</option>
                        <option value="9ano">9 ano</option>
                        <option value="1ano">1 ano</option>
                        <option value="2ano">2 ano</option>
                        <option value="3ano">3 ano</option>
                    </select>

                    <select name="ganhador" required>
                        <option disabled selected>Ganhador</option>
                        <option value="9ano">9 ano</option>
                        <option value="1ano">1 ano</option>
                        <option value="2ano">2 ano</option>
                        <option value="3ano">3 ano</option>
                    </select>

                    <select name="modalidade" required>
                        <option disabled selected>Modalidade</option>
                        <option>Vôlei</option>
                        <option>Pebolim</option>
                        <option>Cabo de Guerra</option>
                        <option>Penalidades</option>
                        <option>Tênis de Mesa</option>
                        <option>Embaixadinha</option>
                        <option>Campo Minado</option>
                        <option>Lance Livre</option>
                        <option>Queimada</option>
                    </select>

                    <div class="btn"><button type="submit">Enviar</button></div>
                </form>
            </div>
        </div>

    </main>
</body>

</html>