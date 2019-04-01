<html>
    <head>
        <title>AJAX RSS Reader</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function showRSS(str){
                if(str.length == 0){
                    document.getElementById("rssOutput").innerHTML = "";
                }
                else{
                    var xmlhttp = new XMLHttpRequest;
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById("rssOutput").innerHTML = xmlhttp.responseText;
                        }
                    }
                }
                xmlhttp.open("GET", "getrss.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <form>
        <label>Select An RSS Feed : </label>
        <select onchange="showRSS(this.value)" class="form-control">
            <option value="">Select An RSS Feed : </option>
            <option value="Google">Google News</option>
            <option value="NBC">NBC News</option>
        </select>
    </form>
    <br>
    <div id="rssOutput">RSS-Feed Will Be Listed Here.</div>
    </body>
</html>