<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="principal">
        <div class="contenedor"> 
            <header class="cabecera">
                <div class="cabecera-imagen">
                    <img src="images/universidad.png" alt="Universidad">
                </div>
                <div class="cabecera-contenido">
                    <nav class="menu">
                        <ul>
                            <button onclick="opcionNombre('Inicio')">Inicio</button>
                            <button onclick="javascript:cargarContenido('formulario.php', 'Lista')">Lista</button>
                            <button onclick="javascript:cargarContenido('horariosSis256.php','Horario SIS256')">Horarios</button>
                            <button onclick="javascript:cargarContenidoFetch('leer.php','Calificaciones SIS 256')">Calificaciones</button>
                            <button onclick="javascript:cargarContenidoFetch('formularioinforme.php','Informe')">Informes</button>
                        </ul>
                    </nav>
                    <div id="titulo" class="cabecera-contenido__titulo">
                        Inicio
                    </div>
                </div>
            </header>
            
            <section class="cuerpo">
                <aside class="lateral"> 
                    <p>Asignaturas</p>
                    <div id="menu" class="lateral-menu">
                        <div id="oculto">
                        <button id="btn_SIS256" onclick="javascript:cargarContenido('horariosSis256.php','Horario SIS256')">SIS256</button>
                        <button id="btn_SIS258" onclick="javascript:cargarContenido('horariosSis258.php','Horario SIS258')">SIS258</button>
                        <button id="btn_SIS406" onclick="javascript:cargarContenido('horariosSis406.php','Horario SIS406')">SIS406</button>
                        </div>
                    </div>
                </aside>
                <div id="contenido" class="cuerpo-centro">
                    <div class="datos">
                        <p>Examen Final de SIS 256</p>
                        <p>Estudiante: Samuel Dayler Amonzabel Gonzales</p>
                        <p>Cu: 35-4981</p>
                        <div>
                        <span>Semestre</span>
                        <span class="fecha">2/2022</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="app.js"></script>
</body>
</html>