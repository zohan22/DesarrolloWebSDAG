<?php session_start();

if(isset($_SESSION['candidatoUno'])){
    $votosCandidatoUno = $_SESSION['candidatoUno'];
}
else{
    $votosCandidatoUno = 0;
}

if(isset($_SESSION['candidatoDos'])){
    $votosCandidatoDos = $_SESSION['candidatoDos'];
}
else{
    $votosCandidatoDos = 0;
}

if(isset($_SESSION['candidatoTres'])){
    $votosCandidatoTres = $_SESSION['candidatoTres'];
}
else{
    $votosCandidatoTres = 0;
}

if(isset($_SESSION['candidatoCuatro'])){
    $votosCandidatoCuatro = $_SESSION['candidatoCuatro'];
}
else{
    $votosCandidatoCuatro = 0;
}

$votacion = $_POST['votacion'];

switch($votacion){
    case 'candidatoUno':
        $votosCandidatoUno++;
        break;
    case 'candidatoDos':
        $votosCandidatoDos++;
        break;
    case 'candidatoTres':
        $votosCandidatoTres++;
        break;
    case 'candidatoCuatro':
        $votosCandidatoCuatro++;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Resultado de las elecciones</h1>

<ul>
    <li>Candidato # 1:<span> <?php echo $votosCandidatoUno; ?></span></li>
    <li>Candidato # 2:<span> <?php echo $votosCandidatoDos; ?></span></li>
    <li>Candidato # 3:<span> <?php echo $votosCandidatoTres; ?></span></li>
    <li>Candidato # 4:<span> <?php echo $votosCandidatoCuatro; ?></span></li>
</ul>
</body>
</html>

<?php
    $_SESSION['candidatoUno'] = $votosCandidatoUno;
    $_SESSION['candidatoDos'] = $votosCandidatoDos;
    $_SESSION['candidatoTres'] = $votosCandidatoTres;
    $_SESSION['candidatoCuatro'] = $votosCandidatoCuatro;
?>

