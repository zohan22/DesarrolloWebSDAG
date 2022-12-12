//let botones = document.getElementsByClassName("boton").value;
// let texto = document.getElementById("factorial");

// function obtenerNumero(){
//     for(let i=0; i<botones.length; i++){
//         texto.innerText += botones[i];
//     }
// }

function mostrarNumero(){
    let boton = document.getElementsByClassName("boton");
    for(let i=0; i<boton.length; i++){
        document.write(boton[i].innerHTML);
    }
}



