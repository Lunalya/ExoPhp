<?php

$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

echo $mois[3] . '<br />' . $mois[5];
?>

<?php

$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
$remplacement = array( 7 => 'Août' );

$month = array_replace($mois, $remplacement);
print_r($month);

foreach ($month as $list)
{
  echo '<p>' .$list . '</p>';
}
?>
