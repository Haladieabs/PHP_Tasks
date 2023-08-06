<?php
$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<forms>
 <form>jordan</form>
 <form>usa</form>
 <form>iraq</form>
 <form>palestaine</form>
</forms>

XML;

$dom = new DOMDocument;
$dom->loadXML($xml);
$forms = $dom->getElementsByTagName('form');
foreach ($forms as $form) {
    echo $form->nodeValue, PHP_EOL;
    echo "<br>";

}
?>