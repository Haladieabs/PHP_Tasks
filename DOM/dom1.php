<?php
// <Dom php 1>


// // Create a new DOMDocument
// $domDocument = new DOMDocument('1.0', 'iso-8859-1');

// // Use createElement() function to add a new element node
// $domElement = $domDocument->createElement('organization', 'GeeksforGeeks');

// // Append element to the document
// $domDocument->appendChild($domElement);

// // Save XML file and display it
// echo $domDocument->saveXML();



// <Dom php 2>

// // Create a new DOMDocument
// $domDocument = new DOMDocument('1.0', 'iso-8859-1');

// // Use createElement() function to add a new element node
// $domElement1 = $domDocument->createElement('organization');
// $domElement2 = $domDocument->createElement('name', 'GeeksforGeeks');
// $domElement3 = $domDocument->createElement('address', 'Noida');
// $domElement4 = $domDocument->createElement('email', 'abc@geeksforgeeks.org');

// // Append element to the document
// $domDocument->appendChild($domElement1);
// $domElement1->appendChild($domElement2);
// $domElement1->appendChild($domElement3);
// $domElement1->appendChild($domElement4);

// // Save XML file and display it
// echo $domDocument->saveXML();


// <Dom php with loope>


$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<books>
 <book>Patterns of Enterprise Application Architecture</book>
 <book>Design Patterns: Elements of Reusable Software Design</book>
 <book>Clean Code</book>
 <book>what is yor name</book>
</books>

XML;

$dom = new DOMDocument;
$dom->loadXML($xml);
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
    echo "<br>";

}
?>

