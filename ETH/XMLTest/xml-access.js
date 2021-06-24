function loadDoc(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            xmlFunc(this);
        }
    };
    xhttp.open("GET", "http://127.0.0.1/XMLTest/info.xml", true);
    xhttp.send();
}

function xmlFunc(xml){
    var i;
    var xmlDoc = xml.responseXML;
    var table = "<tr><th>Subject Code</th><th>Subject Name</th></tr>";
    var x = xmlDoc.getElementsByTagName("sub");
    for(i = 0; i < x.length; i++){
        table += "<tr><td>" + x[i].getElementsByTagName("code")[0].childNodes[0].nodeValue + "</td><td>" + x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</td></tr>";
    }
    document.getElementById("info").innerHTML = table;
}
