<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undertale</title>
    <img src="https://i.pinimg.com/564x/e5/24/f9/e524f9ea73984dc99c2bb38e2b307d22.jpg" alt="Banner animado" style="width:50%; max-height: 200px; object-fit: cover;">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Silkscreen&display=swap'>
    <style>
/* Estilos gerais */
body {
    font-family: 'Silkscreen', sans-serif; /* Aplicando a fonte que vc quer */
    margin: 0;
    padding: 0;
    background-color: #000000; /* Fundo preto */
    color: white; /* Texto branco */
    text-align: center; /* Centralização do conteúdo */
}

/* Estilos para o topo */
header {
    background-color: #000; /* Fundo escuro */
    color: #FFFFFF; /* Texto branco */
    padding: 20px 0;
    text-transform: uppercase; /* Letras maiúsculas */
    border-bottom: 4px solid #FFFFFF; /* Borda branca no rodapé */
}

/* Estilos para o menu */
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #111111; /* Fundo escuro */
    overflow: hidden;
    display: flex;
    justify-content: center; /* Centraliza os itens do menu */
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    border: 2px solid white; /* Borda branca nos links */
    border-radius: 5px;
    transition: 0.3s ease; /* Transição suave */
}

nav ul li a:hover {
    background-color: black; /* Fundo cinza claro ao passar o mouse */
    color: red; /* Texto vermelho */
}

/* Estilos para o rodapé */
footer {
    background-color: #000;
    color: white;
    text-align: center;
    padding-top: 20px
    position: fixed;
    bottom: 0;
    width: 100%;
    border-top: 2px solid #FFFFFF; /* Borda branca no topo do rodapé */
}

/* Estilos para o formulário */
form {
    background-color: #000;
    padding: 20px;
    margin: 20px auto;
    width: 50%;
    border-radius: 5px;
    border: 2px solid white; /* Borda branca nos links */
}

form input, form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 2px solid #FFFFFF;
    background-color: #333333;
    color: white;
}


form input[type="submit"] {
    background-color: #FFFFFF;
    color: #000000;
    border: none;
    cursor: pointer;
    padding: 10px;
}

form input[type="submit"]:hover {
    background-color: #808080; /* Fundo  ao passar o mouse */
    color: #ff0000; /* Texto vermelho */
}

p {
    padding-left: 50px;
    padding-right: 50px;
}

.balao-fala {
            position: relative;
            background-color: black; /* Cor de fundo */
            border: 2px solid white; /* Cor da borda */
            border-radius: 10px; /* Arredondamento dos cantos */
            padding: 40px; /* Padding */
            color: white; /* Cor do texto */
            width: 300px; /* Largura do balão */
            height: 190px; /* Altura do balão */
            font-family: 'Silkscreen', sans-serif; /* Fonte pixel */
            margin: 20px ; /* Margem automática para centralizar */
        }
        .balao-fala::after {
            content: '';
            position: absolute;
            bottom: 100px; /* Mova o balão para cima */
            border-style: solid;
            border-color: transparent transparent black transparent; /* Cor da ponta */
        }
        .destaque {
    color: white; /* Cor inicial */
    transition: color 0.3s; /* Transição suave */
}

.destaque:hover {
    color: yellow; /* Cor ao passar o mouse */
}

.btn-enviar:hover {
    background-color: #FFFFFF; /* Fundo branco ao passar o mouse */
    color: #000000; /* Texto preto ao passar o mouse */
}
    </style>

</head>
</body>
