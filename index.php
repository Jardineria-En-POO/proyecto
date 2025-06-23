<?php
require_once 'Planta.php';
require_once 'Jardin.php';
require_once 'Stock.php';
require_once 'Catalogo.php';

// Crear Plantas
$amapola = new Planta(1, "Amapola", "Flora", "Flor roja", "2023-10-01", 1500);
$aloe = new Planta(2, "Aloe Vera", "Flora", "Medicinal", "2023-10-02", 3000);
$cactus = new Planta(3, "Cactus", "Flora", "Resistente al calor", "2023-10-03", 2000);

// Crear Jardines
$jardin1 = new Jardin(1, "Salta", "Jardín Salteño", "salta@mail.com", 50);
$jardin2 = new Jardin(2, "Jardín", "Jardín Cactus", "jardin@mail.com", 40);
$jardin3 = new Jardin(3, "Bosques de Palermo", "Jardín Palermo", "palermo@mail.com", 60);
$jardin4 = new Jardin(4, "Belgrano", "Jardín Belgrano", "belgrano@mail.com", 70);

// Crear Stock
$catalogo = new Catalogo();
$catalogo->agregarStock(new Stock($amapola, $jardin1, 10, 1800));           // Caso 1
$catalogo->agregarStock(new Stock($cactus, $jardin2, 5, 3500));             // Caso 2
$catalogo->agregarStock(new Stock($amapola, $jardin3, 20, 2600));           // Caso 3
$catalogo->agregarStock(new Stock($aloe, $jardin4, 8, 5500));               // Caso 4
$catalogo->agregarStock(new Stock($aloe, $jardin2, 10, 7000));              // No cumple

// Mostrar resultados
function mostrarResultados($titulo, $resultados) {
    echo "<h2>$titulo</h2><ul>";
    if (empty($resultados)) {
        echo "<li>No se encontraron resultados.</li>";
    } else {
        foreach ($resultados as $stock) {
            echo "<li>";
            echo "<strong>Planta:</strong> " . $stock->getPlanta()->getNombre() . "<br>";
            echo "Ubicación: " . $stock->getJardin()->getUbicacion() . "<br>";
            echo "Precio recomendado: $" . $stock->getPrecioRecomendado() . "<br>";
            echo "Jardín: " . $stock->getJardin()->getNombre();
            echo "</li><br>";
        }
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Catálogo con Casos</title>
</head>
<body>
    <h1>Casos de Búsqueda</h1>
    <?php
    mostrarResultados("Caso 1: Usuario de Salta quiere Amapolas",
        $catalogo->buscarPlantas("Salta", "Amapola"));

    mostrarResultados("Caso 2: Usuario busca Cactus < 4000",
        $catalogo->buscarPlantas("Jardín", "Cactus", 4000));

    mostrarResultados("Caso 3: Bosques de Palermo, precio < 2690",
        $catalogo->buscarPlantas("Bosques de Palermo", null, 2690));

    mostrarResultados("Caso 4: Belgrano, Aloe Vera < 6000",
        $catalogo->buscarPlantas("Belgrano", "Aloe Vera", 6000));
    ?>
</body>
</html>
