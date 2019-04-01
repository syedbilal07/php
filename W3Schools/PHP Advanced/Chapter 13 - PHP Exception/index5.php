<html>
    <head>
        <title>PHP Exception</title>
    </head>
    <body>
    <?php
    class customException extends Exception{
        public function errorMessage(){
            $errMsg = "Error On Line : ". $this->getLine(). " In : ". $this->getFile(). " : <b> ". $this->getMessage(). "</b> Is Not A Valid Email";
            return $errMsg;
        }
    }
    $email = "someone@example...com";
    try{
        try{
            if(strpos($email, "example") !== false){
                throw new Exception($email);
            }
        }
        catch(Exception $e){
            throw new customException($email);
        }
    }
    catch(customException $e){
        echo $e->errorMessage();
    }
    ?>
    </body>
</html>