
    console.log("Saiba mais iniciando...");

    function saibaMais(){

        xhr = new XMLHttpRequest();
        xhr.open("GET", "http://localhost:8080/views/saibaMais.html", true);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById("conteudoMais").innerHTML = xhr.responseText;
            }

            xhr.send();
            console.log("Saiba mais finalizado...");
        }
    }