<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("jailbreak.xml");

$x=$xmlDoc->getElementsByTagName('VERSION');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$iphone=($y->childNodes);

for ($i=0;$i<$iphone->length;$i++) {
  //Process only element nodes
  if ($iphone->item($i)->nodeType==1) {
    echo("<b>" . $iphone->item($i)->nodeName . ":</b> ");
    echo($iphone->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?>