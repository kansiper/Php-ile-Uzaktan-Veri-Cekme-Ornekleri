<?php 
header('content-type:text/html;charset=utf-8');
$url = 'http://www.namazvakti.com/Main.php?cityID=16703';
$kaynak = file_get_contents($url);
$imsakhtml = explode('<td id="timeImsak" class="pTime">', $kaynak);
$imsaksaat = explode('</td>' ,$imsakhtml[1]);

$oglehtml = explode('<td id="timeOgle" class="pTime">', $kaynak);
$oglesaat = explode('</td>' ,$oglehtml[1]);

$ikindihtml = explode('<td id="timeIkindi" class="pTime">', $kaynak);
$ikindisaat = explode('</td>' ,$ikindihtml[1]);

$aksamhtml = explode('<td id="timeAksam" class="pTime">', $kaynak);
$aksamsaat = explode('</td>' ,$aksamhtml[1]);

$yatsihtml = explode('<td id="timeYatsi" class="pTime">', $kaynak);
$yatsisaat = explode('</td>' ,$yatsihtml[1]);


echo 'imsak : '.$imsaksaat[0]. '</br>';
echo 'ogle : '.$oglesaat[0]. '</br>';
echo 'ikindi : '.$ikindisaat[0].'</br>';
echo 'aksam : '.$aksamsaat[0].'</br>';
echo 'yatsi : '.$yatsisaat[0].'</br>';





?>
