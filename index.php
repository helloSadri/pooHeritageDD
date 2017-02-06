<?php

require "Perso.class.php";

require "Orque.class.php";

require "Paladin.class.php";

require "Vagabond.class.php";



//Paladin
$cas1 = new Vampire("Guyver", 34, 80, "persuation" , array("Épée", "bouclier"), 3, 5);

echo "<p>" .$cas1->getNom() ." est un Paladin d' une force de ".$cas1->getForce() ." avec une experience de ".$cas1->getExp() ." points, en tant que Paladin Vampire, il peut disparairtre " .$cas1->getDisappear() ." fois par partie, et ses points de methamophose sont de " .$cas1->getMetamorph() ." sur 5 " ; print $cas1->afficheWeapon() ."</p>";


//Paladin Vampire
$cas2 =  new Regular("Guyver The Vampire", 54, 80, "Commander" , "Épée", 71, "18/10");

echo "<p>" ."Le Paladin régulier lui ne peut disparaitre ni ce métamorphosé, en revanche sont  ouïe exceptionnel de " .$cas2->getHearing() ." point et couplé a une vue d'aigle de " .$cas2->getSight() ." (excusez du peux) lui permettrons de faire la différence" ."</p>";


//Orque

$cas3 =  new Zombie("Woorko", 64, 50, "guérison" ,"Hache", "%" , 9 );

echo "<p>" .$cas3->getNom() ." l'Orque zombie est indestructible et infatigable , voilà les states : " ."</p>"
."<p>" ."Force de " .$cas3->getForce()  ."</p>"
."<p>" ."Expérience" .$cas3->getExp()  ."</p>"
."<p>" ."Il possède la ".$cas3->getHeal() ." Total et vous poursuit avec une " .$cas3->getWeapon() .", le grand modèle " . ", heureusement pour vous il est plutôt lent" ."</p>";



$cas4 =  new SuperZombie ("Super Zombie Woorko", 94, 20, "guérison" ,"Hache", "gout" ,"l' odorat") ;
echo "<p>" ."Dans le cas ou vous seriez encore en vie " .$cas4->getNom() ." lui possède en plus, des sens très aiguisé du " .$cas4->getTaste() . " et de " .$cas4->getSmell() .". Chasseur infatigable il semble que vous avez déjà perdue la partie !" ."</p>";



// Vagabond

$cas5 =  new Spy("Placide", 20, 95, "hypnose", "fronde", 90, 90);

echo "<p>" ."Rien n'est ce qui semble être, " .$cas5->getNom() ." est un espion redoutable, une force de " .$cas5->getForce() . " et une expérience de " .$cas5->getExp() . " dans sont arsenal l' " .$cas5->getSpell() ." et une " .$cas5->getWeapon() . ". Impossible à repérer avec un taux de " .$cas5->getDisappear() ."% en disparition et " .$cas5->getMetamorph() ."% en déguisement." ."</p>";

$cas6 =  new Divinity("Oz" , 100, 100, "", "", 100, 100);

echo "<p>" ."Les apparence sont plus que trompeuse " .$cas6->getNom() ." est une divinité, Force : "  .$cas6->getForce() .", Experience : ".$cas6->getExp() . ". Il est toute fois l'imité dans ses actions et ne peux utiliser que l’ouïe d'une capacité de " .$cas6->getHearing() ." et le touché de " .$cas6->getTouch()   . ". Rappelez vous que chaque bénédiction peux tourner en malédiction "."</p>";



