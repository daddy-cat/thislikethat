<?php 
include('simple_html_dom.php');
$styleurl = $_GET["styleurl"];
$contenturl = $_GET["contenturl"];
echo '<base href="' . $styleurl . '">';
error_reporting(E_ALL);
$stylehtml = file_get_html($styleurl);
$contenthtml = file_get_html($contenturl);

$parray = $contenthtml->find('p');
$x = 1;
foreach ($stylehtml->find('p') as $p) {
	$x = $x + 1;
	$p->innertext = $parray[$x];
}

$haarray = $contenthtml->find('h1');
$x = 1;
foreach ($stylehtml->find('h1') as $ha) {
	$x = $x + 1;
	$ha->innertext = $haarray[$x];
}

$hbarray = $contenthtml->find('h2');
$x = 1;
foreach ($stylehtml->find('h2') as $hb) {
	$x = $x + 1;
	$ha->innertext = $hbarray[$x];
}

$hcarray = $contenthtml->find('h3');
$x = 1;
foreach ($stylehtml->find('h3') as $hc) {
	$x = $x + 1;
	$hc->innertext = $hcarray[$x];
}




echo $stylehtml;
?>










