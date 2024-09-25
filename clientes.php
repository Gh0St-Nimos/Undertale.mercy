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
        <div class="texto">"Ei, foi mais legal do que um sonho de ketchup!"</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/bd/8a/d4/bd8ad42d5851d149786205e259bf393c.jpg" alt="Imagem 2">
        <div class="texto">"Querido, você fez um trabalho maravilhoso!"</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/2e/13/5b/2e135b6c4773b5dbf2663041aaeda2da.jpg" alt="Imagem 3">
        <div class="texto">"Ugh, você realmente se destacou, não é? Mas não fique muito feliz!"</div>
    </div>

    <div class="container">
        <img src="https://i.pinimg.com/564x/66/db/f7/66dbf76944be89f6b2dd0f5bb63c7694.jpg" alt="Imagem 4">
        <div class="texto">"Uuuh! Você foi incrível! Como um verdadeiro espaguete digno!"</div>
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
