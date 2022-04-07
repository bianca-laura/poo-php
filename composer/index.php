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
        use Biancalaura\ComposerPhp\Mammal;
        use Biancalaura\ComposerPhp\Reptile;
        use Biancalaura\ComposerPhp\Fish;
        use Biancalaura\ComposerPhp\Poultry;
        use Biancalaura\ComposerPhp\Wolf;
        use Biancalaura\ComposerPhp\Dog;
        use Biancalaura\ComposerPhp\Video;
        use Biancalaura\ComposerPhp\Gafanhotos;
        use Biancalaura\ComposerPhp\Views;
        
        //use Biancalaura\ComposerPhp\ActionVideoInterfase;


        $v[0] = new Video("Curso Poo");
        $v[1] = new Video("Curso Php");
        $v[2] = new Video("Curso de Java Script");

        $g[0] = new Gafanhotos("Bianca", 25, "F", "BiancaLaura");
        $g[1] = new Gafanhotos("Jhonatan", 28, "M", "JhowQueiroz");
        $g[2] = new Gafanhotos("Hellena", 3, "F", "HellenaSophy");

        print_r($g);
        print_r($v);

        $views = new Views($g[0], $v[0]);
        $views2 = new Views($g[0], $v[0]);
       $views3 = new Views($g[0], $v[0]);
        $views3 = new Views($g[0], $v[0]);


        //$views->evaluate();
       $views2->evaluateNote(10);
        $views3->evaluatePercent(99);
       $views3->evaluatePercent(99);
       $views3->evaluatePercent(99);
        

        print_r($v);
        print_r($g);


       // print_r($views);

        /*$d = new Dog(5, 1.5, "Lolla", "Cachorro");
        $w = new Wolf(10, 2, "Lobinho", "Lobo");

        echo '<p> o cachorro faz '. $d->talking(). '</p>';
        echo '<p>'. $d->reactPhrase('Olá');
        echo '<p>'. $d->reactPhrase('Vai deitar');
        echo '<p>'. $d->reactHour(7,50);
        echo '<p>'. $d->reactHour(20,30);
        echo '<p>'. $d->reactHour(14,5);
        echo '<p>'. $d->reactOwner(true);
        echo '<p>'. $d->reactYears(2,11);

        echo '<p> o lobo faz '. $w->talking(). '</p>'; */


        /* $m = new Mammal(10, 1.5, "Lolla", "Cachorro");
        echo $m->getName(). ' Da especie '. $m->getSpecies(). ' tem '. $m->getYears(). 'Anos de idade';
        echo ' e '. $m->getWeight(). 'Kg';
        echo '<p> como um ele se locomove? '. $m->walking(); '<p>'; 
        echo '<p> como um ele se alimenta ? '. $m->eat(). '<p>'; 
        echo '<p> como ele fala? '. $m->talking(). '<p>'; 

        $r = new Reptile(3, 4, "Rap", "Largato");
        echo $r->getName(). ' Da especie '. $r->getSpecies(). ' tem '. $r->getYears(). 'Anos de idade';
        echo ' e '. $r->getWeight(). 'Kg';
        echo '<p> como um ele se locomove? '. $r->walking(); '<p>'; 
        echo '<p> como um ele se alimenta ? '. $r->eat(). '<p>'; 
        echo '<p> como ele fala? '. $r->talking(). '<p>'; 

        $f = new Fish(1, 1, "Nemo", "Peixinho dourado");
        echo $f->getName(). ' Da especie '. $f->getSpecies(). ' tem '. $f->getYears(). 'Anos de idade';
        echo ' e '. $f->getWeight(). 'Kg';
        echo '<p> como um ele se locomove? '. $f->walking(); '<p>'; 
        echo '<p> como um ele se alimenta ? '. $f->eat(). '<p>'; 
        echo '<p> como ele fala? '. $f->talking(). '<p>'; 

        $p = new Poultry(1.5, 1, "Blue", "Piriquito");
        echo $p->getName(). ' Da especie '. $p->getSpecies(). ' tem '. $p->getYears(). 'Anos de idade';
        echo ' e '. $p->getWeight(). 'Kg';
        echo '<p> como um ele se locomove? '. $p->walking(); '<p>'; 
        echo '<p> como um ele se alimenta ? '. $p->eat(). '<p>'; 
        echo '<p> como ele fala? '. $p->talking(). '<p>';  */
    
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

            /* $p1 = new Student("Bianca Laura", 25, "F");
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

            //var_dump($p3); */
         


            




            

        ?>
    </pre>
</body>
</html>