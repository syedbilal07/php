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
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            throw new customException($email);
        }
        if(strpos($email, "example") !== false){
            echo "$email Is An Example Email";
        }
    }
    catch(customException $e){
        echo $e->errorMessage();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    ?>
    </body>
</html>