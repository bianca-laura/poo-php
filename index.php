<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";
            require_once "ContaBanco.php";
            //$c1 = new Caneta;
            //$c1 -> destampar();
            //$c1 -> rabiscar();

            $conta1 = new ContaBanco;
            $conta1 -> setNumConta(3344);
            $conta1 -> setDono("Bianca");
            $conta1 -> abrirConta("CP");
            $conta1 -> depositar(300);
            $conta1 -> pagarMensal();

            $conta2 = new ContaBanco;
            $conta2 -> setNumConta(4456);
            $conta2 -> setDono("Jhonatan");
            $conta2 -> abrirConta("CC");
            $conta2 -> depositar(200);
            $conta2 -> pagarMensal();
            

            var_dump($conta1);
            var_dump($conta2);

        ?>
    </pre>
</body>
</html>