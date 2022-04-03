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

        require 'vendor/autoload.php';

        use Biancalaura\ComposerPhp\Student;
        use Biancalaura\ComposerPhp\Teacher;
        use Biancalaura\ComposerPhp\Visitor;
        use Biancalaura\ComposerPhp\Officer;
        use Biancalaura\ComposerPhp\Fellow;

    
            // aprendendo a criar classes

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
            
            //aprendendo interfases

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

            // relacionando classes 
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

           /* $person1 = new Person("Bianca", 25, "F");
            $book1 = new Book("The Bible", "Jesus", 1662, $person1);
            
            $book1 ->open();
            $book1->details(); */

            // herança

            $p1 = new Student("Bianca Laura", 25, "F");
            $p2 = new Teacher("Leandro Anderson", 29, "M");
            //$p3 = new Officer("Jhonatan Queiroz", 29, "M");
            $p3 = new Visitor("Jhonatan Queiroz", 29, "M");
            $p4 = new Fellow("Hellena Sophia", 19, "F");
            
            $p1->setCourse("Programação");
            $p1->setRegistration(5687);

            $p2->setSalary(4500);
            $p2->setSpecialties("Programação");

            // $p3->setSalary(2700);
            //$p3->setoProfession("Cozinheiro");
            
            
            echo $p1->details(). '<br />'; 
            echo $p1->payMonthly(). '<br />';
            echo $p2->details(). '<br />';
            echo $p4->payMonthly(). '<br />';

            //echo $p3->details(). '<br />';

            //var_dump($p3);
         


            




            

        ?>
    </pre>
</body>
</html>