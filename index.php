<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Apresente-se</h1>
        </header>
        <section>
        <form action="cad.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="idnome">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="idsobrenome">
        <input type="submit" value="Enviar">
        </form>
        </section>

        <header>
            <h1>Resultado do processamento</h1>
            </header>
            <main>
            <?php
            $n = $_GET ["nome"];
            $s = $_GET ["sobrenome"];
            echo "<p> É um prazer te conhecer, <strong>$n $s</strong>! Este é meu site;"
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
            </main>
            
</body>
</html>
