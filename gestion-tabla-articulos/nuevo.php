<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");

    //Genera categorias:
    $categorias = generarCategorias();

    // Recoge valores del formulario - metodo POST
    $descripcion = $_POST["descripcion"];
    $modelo = $_POST["modelo"];
    $categoria = $categorias[$_POST["categoria"]];
    $unidades = $_POST["unidades"];
    $precio = $_POST["precio"];

    // Genera array de libros $tabla
    $tabla = generarTabla();

    $ultimoId = ultimoId($tabla);

    // Nuevo libro $nuevo
    $nuevo = [
        "id" => $ultimoId + 1,
        "descripcion" => $descripcion,
        "modelo" => $modelo,
        "categoria" => $categoria,
        "unidades" => $unidades,
        "precio" => $precio
    ];


    // Genera cabecera de tabla
    $cabecera = array_keys($tabla[0]);

    // Añadir $nuevo a array $tabla
    $tabla = nuevo($tabla, $nuevo);

    // Carga plantilla HTML
    require_once("template/tabla.php");
?>