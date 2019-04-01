<html>
    <head>
        <title>AJAX XML</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <script>
        function showCD(str){
            if(str.length == 0){
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            else{
                var xmlhttp = new XMLHttpRequest;
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "getcd.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
    <body>
    <form>
        <label class="control-label">Select a CD:</label>
        <select name="cds" onchange="showCD(this.value)" class="form-control">
            <option value="">Select a CD:</option>
            <option value="Bob Dylan">Bob Dylan</option>
            <option value="Bee Gees">Bee Gees</option>
            <option value="Cat Stevens">Cat Stevens</option>
        </select>
    </form>
    <div id="txtHint"><b>CD Info Will Be Listed Here.</b></div>
    </body>
</html>