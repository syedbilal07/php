<html>
    <head>
        <title>AJAX Poll</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function getVote(str){
                if(str.length == 0){
                    document.getElementById("poll").innerHTML = "";
                    return;
                }
                else{
                    var xmlhttp = new XMLHttpRequest;
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById("poll").innerHTML = xmlhttp.responseText;
                        }
                    }
                }
                xmlhttp.open("GET", "poll_vote.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <div id="poll">
        <h3>Do you like PHP and AJAX so far?</h3>
        <form>
            <label class="control-label">Yes :</label>
            <input type="radio" name="vote" class="form-control" value="0" onclick="getVote(this.value)">
            <br><label class="control-label">No :</label>
            <input type="radio" name="vote" class="form-control" value="1" onclick="getVote(this.value)">
        </form>
    </div>
    </body>
</html>