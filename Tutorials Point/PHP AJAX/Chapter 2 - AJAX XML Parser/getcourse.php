<?php
    $q = $_GET["q"];
    $xml = new DOMDocument();
    $xml->load('catalog.xml');
    $x = $xml->getElementsByTagName("COURSE");
    for($i = 0;$i <= $x-> length - 1;$i++){
        if($x -> item($i) -> nodeType == 1){
            if($x -> item($i) -> childNodes -> item(0) -> nodeValue == $q){
                $y = ($x -> item($i) -> parentNode);
            }
        }
    }
    $cd = ($y -> childNodes);
    for($i; $i < $cd -> length; $i++){
    if($cd -> item($i) -> nodeType == 1){
        echo "<b>". $cd -> item($i) -> nodeName. ": </b>";
        echo $cd -> item($i) -> childNodes -> item(0) -> nodeValue;
        echo "<br>";
    }
}
?>