<?php
    $data = "<?xml version = '1.0' encoding = 'UTF-8'?>
    <note>
      <Course>Android</Course>
      <Subject>Android</Subject>
      <Company>TutorialsPoint</Company>
      <Price>$10</Price>
   </note>";
    $xml = simplexml_load_string($data) or die("Error : Cannot Create Object");
?>
<html>
    <head>
        <title>Simple XML</title>
    </head>
    <body>
    <?php
    print_r($xml);
    ?>
    </body>
</html>