<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");

    // Recoge indice - metodo GET
    $indice = $_GET["indice"];

    //Genera categorias:
    $categorias = generarCategorias();
    
    // Recoge valores del formulario - metodo POST
    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $modelo = $_POST["modelo"];
    $categoria = $categorias[$_POST["categoria"]];
    $unidades = $_POST["unidades"];
    $precio = $_POST["precio"];

    // Libro a editar
    $articulo = [
        "id" => $id,
        "descripcion" => $descripcion,
        "modelo" => $modelo,
        "categoria" => $categoria,
        "unidades" => $unidades,
        "precio" => $precio
    ];

    // Genera array de articulos $tabla
    $tabla = generarTabla();

    // Actualiza el articulo
    $tabla = actualizar($tabla, $articulo, $indice);

    // Genera cabecera de tabla
    $cabecera = array_keys($tabla[0]);

    // Carga plantilla HTML
    require_once("template/tabla.php");

?>