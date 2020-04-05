<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" integrity="sha256-zvFVp826siCUuxc2KZRdlkALzLZWNb7FaJm9K1mRxW0=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Snippet</title>
</head>
<body>
    <main id='app'>
        <nav class="blue">
        <div class="nav-wrapper" v-if="menu==true">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php"><i class="material-icons">home</i></a></li>
                <li><a href="alta.php"><i class="material-icons">add</i></a></li>
                <li><a href="../login/salir.php">Salir</a></li>
            </ul>
        </div>
        </nav>
    
    
