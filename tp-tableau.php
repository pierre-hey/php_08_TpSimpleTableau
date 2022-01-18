<!-- 
ETAPE 1
    Créer un tableau d’entier allant de 0 à 41 en PHP en une seule ligne
ETAPE 2
    Mélanger ce tableau
ETAPE 3
    Créer un tableau de 16 entiers aléatoires à partir de l’ETAPE 2 en une ligne en PHP
ETAPE 4
    Créer un tableau de 32 paires d’entiers aléatoires à partir de l’ETAPE 3 en une ligne en PHP
ETAPE 5
    Mélanger ce tableau de 32 lignes
ETAPE 6
    Parcourir ce tableau pour afficher les images (ex :1.jpg)
    Sur la maquette HTML jeux.html majhong Fichiers > 06
-->

<?php
// Etape 1
    $tablChiffres = range(0, 41);

// Etape 2
    shuffle($tablChiffres);

// Etape 3
    $tablChiffre16 = array_slice($tablChiffres,25);

// Etape 4
    $tablChiffre32 = array_merge($tablChiffre16, $tablChiffre16);
    var_dump($tablChiffre32);

// Etape 5
    shuffle($tablChiffre32);
    foreach($tablChiffre16 as $index=>$nombre){
        $img = "./images/".$nombre.".jpg"; ?>
        <div>
            <a href="jeux.php?idA=<?=$nombre?>">
                <img src="<?=$img ?>" width="80" data-id='<?=$nombre ?>'>
            </a>   
            <?php
    }      
?>