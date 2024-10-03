<?php
// Aquí irá la lógica
include_once 'carta.php';
session_start();

// Construir la ruta de la imagen de fondo
$rutaFondo = "plantillas/" . ($_REQUEST['pokemonType'] ?? '') . ".png";
$rutaImagen = "img/" . ($_REQUEST['pokemonName'] ?? '') . ".png";

$carta = new Carta(
    $_REQUEST['pokemonName'] ?? 'Nombre',
    $_REQUEST['pokemonType'] ?? '',
    $_REQUEST['evolutionLevel'] ?? '',
    $_REQUEST['hp'] ?? '',
    $_REQUEST['damage'] ?? '',
    $_REQUEST['defense'] ?? '',
    $_REQUEST['stamina'] ?? '',
    $_REQUEST['imagen'] ?? '',
    $rutaImagen,
    $rutaFondo
);

// Almacenar la carta en la sesión
$_SESSION['cartas'][] = $carta;

// Mostrar todas las cartas generadas
if (isset($_SESSION['cartas'])) {
        $carta->pintaCarta();
    
}
?>
