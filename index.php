<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gincana</title>
    <link rel="stylesheet" href="style.css">
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
    <div class="box">
        <div class="t"><h2>Como funciona?</h2></div>
        <p>
            A Gincana Esportiva é um evento que reúne competição, trabalho em equipe e muita energia entre os alunos. 
            Mais do que disputas, ela incentiva a união, o respeito e o espírito esportivo.
        </p>
        <p>
            Aqui você pode acompanhar as modalidades, consultar informações sobre as equipes, horários das partidas e o placar atualizado das competições.
            Tudo organizado para facilitar sua experiência durante o evento.
        </p>
        <p>
            Escolha uma opção no menu ao lado e explore tudo o que a gincana tem a oferecer. 
            Prepare-se para torcer, competir e viver momentos inesquecíveis!
        </p>
        <p>Caso haja alguma duvida, acesse a nossa página <a href="sobre.php">Sobre</a></p>
        <button id="abrirPopup">Cadastre-se</button>
    </div>
<div class="bg" id="bg">
    <div class="certeza">
        <div class="tit">
            <h1>Deseja prosseguir?</h1>
        </div>
        <p>Caso haja alguma duvida, acesse a nossa página <a href="sobre.php">sobre</a></p>
        <div class="btn">
            <a href="form.php">
                <button>Ok</button>
            </a>
            <button id="cancelar">Cancelar</button>
        </div>
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
                <li><a href="#"><button>Placar</button></a></li>
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