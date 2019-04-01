<html>
    <head>
        <title>AJAX Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function showUser(str){
                if(str.length == 0){
                    document.getElementById("txtHint").innerHTML = "";
                }
                else{
                    var xmlhttp = new XMLHttpRequest;
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 &&  xmlhttp.status == 200){
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "getuser.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
    <form>
        <select name="users" onchange="showUser(this.value)" class="form-control">
            <option value="">Select a person:</option>
            <option value="1">Peter Griffin</option>
            <option value="2">Lois Griffin</option>
            <option value="3">Joseph Swanson</option>
            <option value="4">Glenn Quagmire</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person Info Will Be Listed Here.</b></div>
    </body>
</html>