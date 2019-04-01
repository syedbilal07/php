<html>
    <head>
        <title>AJAX Search</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            span{
                color:green;
            }
        </style>
        <script>
            function showHint(str){
                if(str.length == 0){
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                else{
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "php_ajax.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
    <h1>Search Your Favourite Tutorials:</h1>
    <form>
        <input type = "text" class="form-control" onkeyup = "showHint(this.value)">
    </form>
    <p><b>Entered Course Name: <span id="txtHint"></span></b></p>
    </body>
</html>