<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Pregunta </title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="principal">
        <div class="contenedor">
            <header class="cabecera">
                <div class="cabecera-superior">
                    <div class="cabecera-superior__logo">
                        <img src="./1parcial-2/usfx.png" alt="Logo Usfx" width="80px" height="130px">
                    </div>
                    <div class="cabecera-superior__titulo">
                        <h1><span>U</span>niversidad de <span>S</span>an <span>F</span>rancisco <span>X</span>avier</h1>
                        <h2><span>F</span>acultad De <span>T</span>ecnología <span class="controlador"><span class="rojo">Sucr</span><span class="amarillo">e - Bol</span><span class="verde">ivia</span></span></h2>
                        <p>Carreras: Ing de Sistemas, Ciencias de la Computación</p>
                        <p class="semestre">Semestre 2-2022</p>
                    </div>
                    <div class="cabecera-superior__lo">
                        <img src="./1parcial-2/tecnologia.png" alt="Logo tecno" width="80px" height="130px">
                    </div>
                </div>
            </header>
            <nav class="nav">
                <div class="a">A</div>
                <div class="b">B</div>
                <div class="c">C</div>
                <div class="d">D</div>
                <div class="e">E</div>
            </nav>
            <main class="cuerpo">
                <aside class="lado-izquierdo">
                    <ul>
                        <li><a id="primero" href="">Inicio</a></li>
                        <li><a href="">Pregunta 2</a></li>
                        <li><a href="../tercera/datos.html">Pregunta 3</a></li>
                        <li><a href="../cuarta/formulariovotacion.html">Pregunta 4</a></li>
                    </ul>
                </aside>
                <section class="cuerpo-centro">
                    <p>Bienvenido al</p>
                </section>
                <aside class="lado-derecho">
                    <div class="alumno">
                        <p>Alumno:</p>
                        <p>Samuel Dayler Amonzabel Gonzales</p>
                    </div>
                    <div class="carrera">
                        <p>Carrera: </p>
                        <p>Ingenieria de Sistemas</p>
                    </div>
                    <div class="imagen">
                        <p>Imagen: </p>
                        <span><img src="./1parcial-2/estudiante.png" alt="estudiante"></span>
                    </div>
                </aside>
            </main>
            <section class="pie">
                <p>Usted ingreso a esta pagina:</p>
                <?php
                if (isset( $_COOKIE['contador'] ) ) {
                    $valor=$_COOKIE['contador'] + 1;
                ?>
                    <span> <?php echo $valor; ?> </span>
                <?php
                    setcookie("contador",$valor,0);
                    }
                else 
                    {
                ?>  

                <p>Usted ingreso a esta pagina: 1</p>
                <?php
                    setcookie("contador",1,0);
                    }
                ?>
                <p>veces</p>
            </section>
            <footer>
                Año 2022
            </footer>
        </div>
    </div>
</body>
</html>