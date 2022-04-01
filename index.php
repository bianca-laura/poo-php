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
            require_once "ControleRemoto.php";
            require_once "Lutador.php";
            require_once "Luta.php";
            require_once "Person.php";
            require_once "Book.php";

            //$c1 = new Caneta;
            //$c1 -> destampar();
            //$c1 -> rabiscar();

         /*   $conta1 = new ContaBanco;
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
            
            $controle1 = new ControleRemoto;
            $controle1 -> ligar();
            $controle1 -> maisVolume();
            $controle1 -> abrirMenu();
            $controle1 -> fecharMenu();
            $controle1 -> menosVolume();
            $controle1 -> ligarMudo();
            $controle1 -> desligarMudo();
            $controle1 -> play();
            $controle1 -> pause();

            //var_dump($controle1);


            //var_dump($conta1);
            var_dump($conta2); */
          /*  $lutadores = array();
            $lutadores[0] = new Lutador("Anderson Silva", "Brasil", 1.75, 25, 5, 3, 2);
            $lutadores[1] = new Lutador("Minotauro", "EUA", 1.80, 28, 5, 3, 2);
            $lutadores[2] = new Lutador("Vitor bel ford", "Mexico", 1.90, 28, 5, 5, 6);

            $lutadores[0] -> setPeso(88,5);
            $lutadores[1] -> setPeso(90,5);
            $lutadores[2] -> setPeso(89,5);

            $luta1 = new Luta();
            $luta1 -> marcarLuta($lutadores[0], $lutadores[2]);
            $luta1 -> lutar();
            $lutadores[0] -> status();
            $lutadores[2] -> status(); */

            $person1 = new Person("Bianca", 25, "F");
            $book1 = new Book("The Bible", "Jesus", 1662, $person1);
            
            $book1 -> open();
            $book1-> details();


            




            

        ?>
    </pre>
</body>
</html>