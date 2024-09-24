<?php
    include_once 'topo.php';
    include_once 'menu.php';
?>
<section>
    <h2>Fale Conosco</h2>
    <form action="enviar_mensagem.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" required></textarea><br>

        <button type="submit">Enviar</button>
    </form>
</section>

<?php
    include_once 'rodape.php';
?>
