<?php

/**
 * Clase para representar un elemento con su nombre, peso y calorías.
 */
class Item {
    public $nombre;   // Cambiado de $name
    public $peso;     // Cambiado de $weight
    public $calorias; // Cambiado de $calories

    /**
     * Constructor de la clase Item.
     *
     * @param string $nombre Nombre del elemento.
     * @param int $peso Peso del elemento.
     * @param int $calorias Calorías del elemento.
     */
    public function __construct($nombre, $peso, $calorias) {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->calorias = $calorias;
    }
}

/**
 * Encuentra la combinación óptima de elementos que cumpla con los requisitos de calorías
 * mínimas y peso máximo, priorizando el menor peso posible.
 *
 * @param int $minCalorias Cantidad mínima de calorías requeridas.
 * @param int $pesoMaximo Peso máximo que se puede llevar.
 * @param array $items Array de objetos Item disponibles.
 * @return array Una combinación de objetos Item que es la óptima, o un array vacío si no se encuentra.
 */
function buscaElementosOptimos($minCalorias, $pesoMaximo, $items) { // Cambiado nombre de función y parámetros
    $n = count($items); // Número total de elementos disponibles.
    $bestCombination = []; // Almacena la mejor combinación encontrada.
    $minPesoTotal = PHP_INT_MAX; // El peso total mínimo encontrado hasta ahora, inicializado al valor máximo posible.

    // Itera a través de todas las posibles combinaciones de elementos.
    // Se utiliza un enfoque de bitwise para representar las combinaciones.
    // Cada bit en 'i' corresponde a un elemento: si el bit está seteado, el elemento se incluye.
    for ($i = 0; $i < (1 << $n); $i++) {
        $currentCombination = []; // La combinación actual que se está evaluando.
        $actualPesoTotal = 0; // Peso total de la combinación actual.
        $actualTotalcalorias = 0; // Calorías totales de la combinación actual.

        for ($j = 0; $j < $n; $j++) {
            // Comprueba si el j-ésimo elemento está incluido en la combinación actual.
            if (($i >> $j) & 1) {
                $currentCombination[] = $items[$j];
                $actualPesoTotal += $items[$j]->peso; // Accediendo a la propiedad 'peso'
                $actualTotalcalorias += $items[$j]->calorias; // Accediendo a la propiedad 'calorias'
            }
        }

        // Comprueba si la combinación actual cumple con los criterios:
        // 1. Las calorías totales son mayores o iguales a las mínimas requeridas.
        // 2. El peso total es menor o igual al peso máximo permitido.
        if ($actualTotalcalorias >= $minCalorias && $actualPesoTotal <= $pesoMaximo) {
            // Si cumple con los criterios, verifica si es mejor que la combinación actual óptima.
            // Una combinación es mejor si tiene un peso total menor.
            if ($actualPesoTotal < $minPesoTotal) {
                $minPesoTotal = $actualPesoTotal; // Actualiza el peso total mínimo.
                $bestCombination = $currentCombination; // Actualiza la mejor combinación.
            }
        }
    }

    return $bestCombination; // Devuelve la combinación óptima encontrada.
}

// Definición de los elementos disponibles (estos podrían cargarse de una base de datos o archivo).
$items = [
    new Item("E1", 5, 3),
    new Item("E2", 3, 5),
    new Item("E3", 5, 2),
    new Item("E4", 1, 8),
    new Item("E5", 2, 3),
];

// Valores predeterminados para las calorías mínimas y el peso máximo.
$minCalorias = 15; // Cambiado de $minCalories
$pesoMaximo = 10; // Cambiado de $maxWeight

// Verifica si el formulario ha sido enviado (método POST).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se enviaron los datos, actualiza las variables con los valores del formulario.
    // Usamos (int) para asegurar que los valores sean enteros y evitamos problemas de seguridad/tipo.
    if (isset($_POST['min_calorias'])) { // Nombre del campo actualizado
        $minCalorias = (int)$_POST['min_calorias'];
    }
    if (isset($_POST['max_peso'])) { // Nombre del campo actualizado
        $pesoMaximo = (int)$_POST['max_peso'];
    }
}

// Encuentra la combinación óptima de elementos con los valores actuales (por defecto o enviados por el usuario).
$optimalItems = buscaElementosOptimos($minCalorias, $pesoMaximo, $items); // Cambiado nombre de función y parámetros

// Variables para los totales que se mostrarán en los resultados
$totalPeso = 0;
$totalCalorias = 0;
foreach ($optimalItems as $item) {
    $totalPeso += $item->peso;
    $totalCalorias += $item->calorias;
}

?>