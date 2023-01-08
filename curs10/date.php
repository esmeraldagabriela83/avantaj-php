<?php
echo  date('d-n-Y H:i', time() + 24* 3 *3600);
echo '<br/>';


$zile = array('Luni','Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata','Duminica');

echo date('N', time());
echo '<br/>';
echo $zile[date('N', time()) - 1];

echo '<br/>in ziua de 5 februarie 2023 ce zi a saptamanii va fi ';
$data = strtotime('05.02.2023');
echo $zile[date('N', $data) - 1];

?>