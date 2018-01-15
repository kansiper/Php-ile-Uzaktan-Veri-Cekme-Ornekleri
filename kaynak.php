<?php 

header('content-type:text/html;charset=utf-8');
$url = 'https://www.mgm.gov.tr/tahmin/il-ve-ilceler.aspx?m=SAKARYA#/';
$kaynak = file_get_contents($url);
highlight_string($kaynak);
?>
h
