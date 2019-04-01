<?php
$html = ' 
      <head> 
         <title>Tutorialspoint</title>
      </head> 
   
      <body> 
         <h2>Course Details</h2> 
      
         <table border = "0"> 
            <tbody> 
               <tr> 
                  <td>Android</td> 
                  <td>Gopal</td> 
                  <td>Sairam</td> 
               </tr> 
         
               <tr> 
                  <td>Hadoop</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>HTML</td> 
                  <td>Gopal</td> 
                  <td>Raju</td> 
               </tr> 
         
               <tr> 
                  <td>Web technologies</td> 
                  <td>Gopal</td> 
                  <td>Javed</td> 
               </tr> 
         
               <tr> 
                  <td>Graphic</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Amith</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Vineeth</td> 
               </tr> 
            </tbody> 
         </table> 
      </body> 
   </html> 
   ';
    // A New DOM Object
    $dom = new DOMDocument;
    // Load The HTML Into The Object
    $dom ->loadHTML($html);
    // Discard White Spaces
    $dom -> preserveWhiteSpace = false;
    // Get Table By Its Tag Name
    $tables = $dom -> getElementsByTagName('table');
    // Get Rows From Table
    $rows = $tables -> item(0) -> getElementsByTagName('tr');
    // Loop Over The Table Rows
    foreach($rows as $row){
        //Get Each Column By Tag Name
        $cols = $row -> getElementsByTagName('td');
        // Print The Values
        echo "Designation : ". $cols -> item(0) -> nodeValue. "<br>";
        echo "Manager : ". $cols -> item(1) -> nodeValue. "<br>";
        echo "Team : ". $cols -> item(2) -> nodeValue. "<br>";
        echo "<hr />";
    }
