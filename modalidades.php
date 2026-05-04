<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gincana</title>
    <link rel="stylesheet" href="modalidades.css">
</head>
<body>
    <?php
$blocos = [
    "Bloco 1" => [
        "jogos" => [
            ['equipe1'=>'9º ANO','equipe2'=>'3º EM','horario'=>'07:10'],
            ['equipe1'=>'1º EM','equipe2'=>'2º EM','horario'=>'07:25'],
            ['equipe1'=>'9º ANO','equipe2'=>'2º EM','horario'=>'07:40'],
            ['equipe1'=>'3º EM','equipe2'=>'1º EM','horario'=>'07:55'],
            ['equipe1'=>'9º ANO','equipe2'=>'1º EM','horario'=>'08:10'],
            ['equipe1'=>'2º EM','equipe2'=>'3º EM','horario'=>'08:25'],
        ],
        "modalidades" => ['Voleibol','Pebolim','Cabo de Guerra']
    ],
    "Bloco 2" => [
        "jogos" => [
            ['equipe1'=>'9º ANO','equipe2'=>'3º EM','horario'=>'08:40'],
            ['equipe1'=>'1º EM','equipe2'=>'2º EM','horario'=>'08:55'],
            ['equipe1'=>'9º ANO','equipe2'=>'2º EM','horario'=>'09:10'],
            ['equipe1'=>'3º EM','equipe2'=>'1º EM','horario'=>'09:25'],
            ['equipe1'=>'9º ANO','equipe2'=>'1º EM','horario'=>'10:00'],
            ['equipe1'=>'2º EM','equipe2'=>'3º EM','horario'=>'10:15'],
        ],
        "modalidades" => ['Penalidades','Tênis de Mesa','Embaixadinha']
    ],
    "Bloco 3" => [
        "jogos" => [
            ['equipe1'=>'9º ANO','equipe2'=>'3º EM','horario'=>'10:30'],
            ['equipe1'=>'1º EM','equipe2'=>'2º EM','horario'=>'10:45'],
            ['equipe1'=>'9º ANO','equipe2'=>'2º EM','horario'=>'11:00'],
            ['equipe1'=>'3º EM','equipe2'=>'1º EM','horario'=>'11:15'],
            ['equipe1'=>'9º ANO','equipe2'=>'1º EM','horario'=>'11:30'],
            ['equipe1'=>'2º EM','equipe2'=>'3º EM','horario'=>'11:45'],
        ],
        "modalidades" => ['Campo Minado','Lance Livre','Queimada']
    ]
];
?>
<header>
    <h1>Gincana esportiva</h1>
    <p>SESI-CE380</p>
</header>
<main>
<div class="toggle-btn" id="toggleBtn">☰</div>
    <div class="sidebar" id="sidebar">
        <nav>
            <ul>
                <li><h2>Navegação</h2></li>
                <li><a href="index.php"><button>Início</button></a></li>
                <li><a href="sobre.php"><button>Sobre</button></a></li>
                <li><a href="modalidades.php"><button>Modalidades</button></a></li>
                <li><a href="placar.php"><button>Placar</button></a></li>
                <button class="abrirPrefs">Preferências</button>
            </ul>
        </nav>
        <img class="senai" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="">
        <script>
        const btn = document.getElementById("toggleBtn");
        const sidebar = document.getElementById("sidebar");
        
        btn.addEventListener("click", () => {
            sidebar.classList.toggle("ativa");
        });
        </script>
</div>
<div class="tudinho">
<div class="caixarola">
    <?php foreach($blocos as $nome => $bloco): ?>
        <div class="caixeta">
            <h2><?= $nome ?></h2>
            <table border="1">
                <tr>
                    <th>Turma 1</th>
                    <th>Turma 2</th>
                    <th>Horário</th>
                </tr>
                <?php foreach($bloco['jogos'] as $jogo): ?>
                    <tr>
                        <td><?= $jogo['equipe1'] ?></td>
                        <td><?= $jogo['equipe2'] ?></td>
                        <td><?= $jogo['horario'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td class="tt" colspan="3"><b>Modalidades:</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <?= implode(" | ", $bloco['modalidades']) ?>
                        </td>
                    </tr>
                </table>
                <br>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="partedotxt">
        <?php
        $arquivos = glob("usuarios/*.txt");

        foreach ($arquivos as $arquivo) {
            $file = fopen($arquivo, "r");
            while (!feof($file)) {
                $linha = fgets($file);
                echo $linha . "<br>";
                }
                fclose($file);
                echo "<hr>";
            }
?>
    </div>
</div>

<div class="s">
    <div class="side">
        <div class="arrow">
            <nav>
                <ul>
                <li><a href="index.php"><button>Início</button></a></li>
                <li><a href="sobre.php"><button>Sobre</button></a></li>
                <li><a href="modalidades.php"><button>Modalidades</button></a></li>
                <li><a href="placar.php"><button>Placar</button></a></li>
                <button class="abrirPrefs">Preferências</button>
                </ul>
                <img class="senai" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="">
            </nav>
        </div>
    <div class="flecha"><img src="removido.png" alt=""></div>
</div>
</div>
</main>
<div class="bg2" id="bgPrefs">
    <div class="popup">
        <h2>Escolha o estilo da sidebar</h2>
    <div class="cliques">
        <button onclick="setModo('normal')">Sidebar Fixa</button>
        <button onclick="setModo('hover')">Sidebar Hover</button>
    </div>
        <div class="fecha"><button id="fecharPrefs">Fechar</button></div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>