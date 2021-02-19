<?php

$departements = array (
    '02' => 'Aisbe',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme');

    echo $departements['59'];

$departements['51'] = 'Marne';
echo '<pre>';
  print_r($departements);
  echo '</pre>';

  foreach ($departements as $dep => $element ) {
    // code...
    echo 'Le numero ' . $dep . ' est le departement ' .$element. '. <br />';
  }
?>
