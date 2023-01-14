const titulo = document.getElementById("titulo");
const menu = document.getElementById("menu");
const contenido = document.getElementById("contenido");
let oculto = document.getElementById('oculto');
oculto.style.display = "none";

function opcionNombre(nombre){
    titulo.innerHTML = nombre;
    location.reload();

}

function cargarContenido(url,nombre){
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            contenido.innerHTML=ajax.responseText;
            titulo.innerHTML = nombre;
            oculto.style.display = 'block';
        }
    }
    ajax.open("GET",url,true);
    ajax.send();
}

function cargarContenidoListar(url){
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            contenido.innerHTML=ajax.responseText;
            titulo.innerHTML = nombre;
            oculto.style.display = 'block';
        }
    }
    ajax.open("GET",url,true);
    ajax.send();
}


function cargarContenidoFetch(url,nombre){
    fetch(url)
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML=data);
    titulo.innerHTML = nombre
}