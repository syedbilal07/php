<html>
    <head>
        <title>PHP Exception</title>
    </head>
    <body>
    <?php
    class customException extends Exception{
        public function errorMessage(){
            // Error Message
            $errorMsg = "Error On Line ". $this->getLine(). " In ". $this->getFile(). " : <b>". $this->getMessage(). "</b> Is Not A Valid Email";
            return $errorMsg;
        }
    }
    $email = "someone@example...com";
    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE){
            throw new customException($email);
        }
    }
    catch(customException $e){
        echo $e->errorMessage();
    }
    ?>
    </body>
</html>