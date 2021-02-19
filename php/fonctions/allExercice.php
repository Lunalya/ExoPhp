<?php
//ex1
$adulte = true;

if ($adulte)
{
  echo 'Tu es adulte';
}
else {
  echo 'Tu es un enfant';
}

?>

<?php
//ex2
function pres($fleurs)
{
  echo 'Les ' .$fleurs. ' sentent bon';
}

pres('Roses des champs');

 ?>




<?php
//ex3
function Caract($animaux, $pays)
{
  echo 'J adore les ' .$animaux. ' et mon pays préféré est ' .$pays;
}

Caract('Chats', 'la Corée');

 ?>

 <?php
//ex4
function ValeurNum($num1 , $num2 ){

  if($num1 > $num2){
    echo "Le premier nombre est plus grand";
  }
  elseif($num1 == $num2){
    echo " Les deux nombres sont identiques";
  }
  else{
    echo "Le premier nombre est plus petit";
  }
};
    ValeurNum(5, 7);
?>

<?php
//ex5
function he($number, $animal){
    echo 'J ai' .$number. ' ' .$animal ;
}
he(8, 'chats');
?>




<?php
//ex6
function Accueil($nom, $prenom, $age)
{
  echo 'Bonjour ' .$nom. ' ' .$prenom. ', tu as ' .$age. ' ans.';
}

Accueil('Oneil', 'Marie', '20');
 ?>

<?php
//ex7
function GenreAge($genre, $age)
{
  if($age < 18){
    $adulte="Mineur";
  } else{
    $adulte="Majeur";
  };

  if($genre=="Homme"){
    $sex="un Homme";
  } elseif($genre== "Femme"){
    $sex="une Femme";
  } else{
    $sex = "d'une autre planete!";
  };

    echo ('Vous êtes ' .$sex. ' et ' .$adulte );
  };

  GenreAge('poisson', 25);

  ?>





 <?php
//ex8
function Calcul($num1, $num2, $num3)
{
   $resultat = $num1 + $num2 + $num3;
   return $resultat; // indique la valeur à renvoyer, ici le volume
}

$resultat = Calcul(3, 1, 2);
echo 'Le resultat est ' . $resultat;
?>
