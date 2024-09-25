<?php
    include_once 'topo.php';
    include_once 'menu.php';
?>
<section>
    <h2>Nossos Clientes</h2>
    <p>Confira nossos clientes satisfeitos.</p>
</section>

<div class="images-container">
    <div class="container">
        <img src="https://i.pinimg.com/564x/05/4f/34/054f34765b246035828b21012439afdb.jpg" alt="Imagem 1">
        <div class="texto">"Ei, Tori, valeu. Eu sabia que podia contar com você, como sempre... heheh, você é incrível."</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/eb/74/3e/eb743eb4e00c3593fda16dbb156000f8.jpg" alt="Imagem 2">
        <div class="texto">"Obrigada, Toriel. Você sempre foi tão gentil comigo... Eu realmente aprecio tudo o que você fez para me ajudar."</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/52/81/b1/5281b1c7bf8af32e0bff478e3aae8232.jpg" alt="Imagem 3">
        <div class="texto">"Mãe, obrigado por sempre ser tão carinhosa. Eu nunca vou esquecer o quanto você faz por todos."</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/66/db/f7/66dbf76944be89f6b2dd0f5bb63c7694.jpg" alt="Imagem 4">
        <div class="texto">"TORIEL! OBRIGADO, REALMENTE! VOCÊ É A DEFINIÇÃO DE GENTILEZA! TALVEZ UM DIA EU POSSA FAZER UMA SOPA TÃO BOA QUANTO A SUA!"</div>
    </div>
    <div class="container">
        <img src="https://i.pinimg.com/564x/a6/98/49/a698494baa09ee97e7e2b4b2d4b997c7.jpg" alt="Imagem 4">
        <div class="texto">"Toriel, você é a MELHOR! Sério, eu nunca conheci alguém tão legal assim. Obrigada por tudo!"</div>
    </div>
    <div class="container">
        <img src="https://i.pinimg.com/564x/03/e1/9a/03e19a90f1393e72a6744c33cf98806a.jpg" alt="Imagem 4">
        <div class="texto">"Oh... uh... obrigado, Toriel... Você é sempre tão gentil. Eu aprecio isso... muito."</div>
    </div>
</div>

<?php
    include_once 'rodape.php';
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Silkscreen&display=swap'>
    <title>Lista de Imagens</title>
    <style>
        body {
            font-family: 'Silkscreen', sans-serif; /* Fonte Silkscreen */
            margin: 0;
            padding: 0;
            background-color: #000000; /* Fundo preto */
            color: white; /* Texto branco */
            text-align: center; /* Centraliza o conteúdo */
        }

        header {
            margin-bottom: 20px; /* Espaçamento abaixo do header */
        }

        img {
            max-width: 100%; /* Imagem responsiva */
            height: auto; /* Mantém a proporção da imagem */
            border-radius: 5px; /* Arredondamento das imagens */
        }

        .container {
            background-color: black; /* Cor de fundo do contêiner */
            border: 2px solid white; /* Borda branca */
            border-radius: 10px; /* Arredondamento dos cantos */
            padding: 10px;
            margin: 20px; /* Espaçamento entre os contêineres */
            display: inline-block; /* Permite que os contêineres fiquem lado a lado */
            width: 150px; /* Largura do contêiner */
            vertical-align: top; /* Alinhamento vertical */
        }

        .texto {
            margin-top: 10px; /* Espaçamento acima do texto */
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            transition: 0.3s ease; /* Transição suave */
        }

        nav ul li a:hover {
            color: red; /* Texto vermelho ao passar o mouse */
        }

        .images-container {
            display: flex; /* Habilita o flexbox */
            justify-content: center; /* Centraliza os itens */
            flex-wrap: wrap; /* Permite quebra de linha */
        }
    </style>
</head>
<body>

</body>
</html>
