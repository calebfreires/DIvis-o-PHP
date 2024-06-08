<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Pegando os dados do form
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
    ?>

    <main>
        <h1>Anatomia de uma divisão</h1>
            <!-- Enviando os dados para o próprio arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisao = $dividendo / $divisor;

            $resto = $dividendo % $divisor;

            print "<p>A divisão entre os números $dividendo e $divisor é igual a: <strong>$divisao</strong> e tem como resto o valor: <strong>$resto</strong></p>"
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$divisao?></td>
            </tr>
        </table>
    </section>
</body>
</html>