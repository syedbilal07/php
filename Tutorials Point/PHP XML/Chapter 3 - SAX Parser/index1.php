<html>
    <head>
        <title>SAX Parser</title>
    </head>
    <body>
    <?php
        //Reading XML Using The SAX(Simple API for XML) Parser
        $tutors = array();
        $elements = null;
        //Call To This Function When Tags Are Open
        function startElements($parser,$name,$attributes){
            global $tutors,$elements;
            if(!empty($name)){
                if($name == 'COURSE'){
                    //Creating An Array To Store Information
                    $tutors [] = array();
                }
                $elements = $name;
            }
        }
        //Call To This Function When Tags Are Close
        function endElements($parser,$name){
            global $elements;
            if(!empty($name)){
                $elements = null;
            }
        }
        //Call To This Function Between Start & End Of The Tags
        function characterData($parser,$data){
            global $tutors, $elements;
            if(!empty($data)){
                if($elements == 'NAME' || $elements == 'COUNTRY' || $elements == 'EMAIL' || $elements == 'PHONE'){
                    $tutors[count($tutors) - 1][$elements] = trim($data);
                }
            }
        }
        // Creates A New XML Parser And Returns A Resource Handle Referencing It To Be Used By The Other XML Functions.
        $parser = xml_parser_create();
        xml_set_element_handler($parser, "startElements", "endElements");
        xml_set_character_data_handler($parser, "characterData");
        //Open XML File
        if(!($handle = fopen("sax.xml", "r"))){
            die("Could Not Open File");
        }
        //Read XML File
        while($data = fread($handle, 4096)){
            //Start Parsing XML Document
            xml_parse($parser, $data);
        }
        xml_parser_free($parser);
        $i = 1;
        foreach($tutors as $course){
            echo "Course No : ". $i. "<br>";
            echo "Course Name : ". $course['NAME']. "<br>";
            echo "Country : ". $course['COUNTRY']. "<br>";
            echo "Email : ". $course['EMAIL']. "<br>";
            echo "Phone : ". $course['PHONE']. "<br>";
            $i++;
            echo "-------------------------------------------------<br>";
        }
    ?>
    </body>
</html>