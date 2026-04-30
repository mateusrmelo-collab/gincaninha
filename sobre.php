<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gincana</title>
    <link rel="stylesheet" href="sobre.css">
</head>
<body>
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
                <li><a href="#"><button>Placar</button></a></li>
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
<div class="s">
    <div class="side">
        <div class="arrow">
            <nav>
                <ul>
                <li><a href="index.php"><button>Início</button></a></li>
                <li><a href="sobre.php"><button>Sobre</button></a></li>
                <li><a href="modalidades.php"><button>Modalidades</button></a></li>
                <li><a href="#"><button>Placar</button></a></li>
                <button class="abrirPrefs">Preferências</button>
                </ul>
                <img class="senai" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="">
            </nav>
        </div>
    <div class="flecha"><img src="removido.png" alt=""></div>
</div>
</div>
<div class="caixeixas">
    <div class="titulo"><h1>Sobre a gincana</h1></div>
    <p class="textinho">A Gincana do SENAI é um evento esportivo e recreativo que reúne os alunos em um dia cheio de atividades, competição e integração.<br><br>Participam da gincana as turmas do 9º ano, 1º ano, 2º ano e 3º ano, que se enfrentam em diversas modalidades ao longo do evento.<br><br>Todos os jogos serão realizados em um único dia, começando às 7h10 da manhã e seguindo até às 12h00. Durante esse período, as equipes irão competir entre si, demonstrando trabalho em equipe, habilidade e espírito esportivo.<br><br>Mais do que vencer, o principal objetivo da gincana é promover a união entre as turmas, incentivar a prática de esportes e proporcionar um momento de diversão para todos os participantes.<br><br>Além das competições esportivas, a classificação geral das equipes será definida por três categorias de pontuação: arrecadação de produtos de higiene, desempenho nas modalidades esportivas e desempenho escolar da turma. Cada uma dessas áreas contribui para o resultado final da gincana, valorizando tanto o esforço coletivo quanto o compromisso dos alunos dentro e fora das atividades esportivas.<br><br>caso, queira saber mais sobre os jogos e horários, acesse a página <a href="modalidades.php">Modalidades</a></p>
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