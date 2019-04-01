<html>
    <head>
        <title>AJAX XML Parser</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function showCD(str){
                if(str == ""){
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                }else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                        xmlhttp.open("GET", "getcourse.php?q=" + str, true);
                        xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <form>
        <h1>Select a Course:</h1>
        <select name = "cds" onchange = "showCD(this.value)" class="form-control">
            <option value = "">Select a course:</option>
            <option value = "Android">Android </option>
            <option value = "Html">HTML</option>
            <option value = "Java">Java</option>
            <option value = "Microsoft">MS technologies</option>
        </select>
    </form>

    <div id = "txtHint"><b>Course Info Will Be Listed Here :</b></div>
    </body>
</html>