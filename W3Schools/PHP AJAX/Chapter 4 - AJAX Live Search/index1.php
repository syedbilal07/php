<html>
    <head>
        <title>AJAX Live Search</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function showResult(str){
                if(str.length == 0){
                    document.getElementById("livesearch").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
                        }
                    }
                xmlhttp.open("GET", "livesearch.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <form>
        <label class="control-label">Search Here : </label>
        <input type="text" size="30" class="form-control" onkeyup="showResult(this.value)">
        <div id="livesearch"></div>
    </form>
    </body>
</html>