<?php
/** Representar un elemento con su nombre, peso y calorias.*/
class Item {
    public $nombre;
    public $peso;
    public $calorias;

    public function __construct($nombre, $peso, $calorias) {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->calorias = $calorias;
    }
}

/* Encuentra la combinacion optima de elementos que cumpla con los requisitos de calorias
   minimas y peso máximo, priorizando el menor peso posible  */
function buscaElementosOptimos($minCalorias, $pesoMaximo, $items) {
    $n = count($items);          // Número total de elementos disponibles.
    $bestCombination = [];       // Almacena la mejor combinacion encontrada.
    $minPesoTotal = PHP_INT_MAX; // El peso total minimo encontrado hasta ahora, inicializado al valor máximo posible.

    // Enfoque de bitwise para representar las combinaciones.
    // Cada bit en 'i' corresponde a un elemento: si el bit está seteado, el elemento se incluye.
    for ($i = 0; $i < (1 << $n); $i++) {
        $currentCombination = [];    // La combinacion actual.
        $actualPesoTotal = 0;       // Peso total de la combinacion actual.
        $actualTotalcalorias = 0; // Calorias totales de la combinacion actual.

        for ($j = 0; $j < $n; $j++) {
            // Comprueba si el elemento j está incluido en la combinacion actual.
            if (($i >> $j) & 1) {
                $currentCombination[] = $items[$j];
                $actualPesoTotal += $items[$j]->peso;
                $actualTotalcalorias += $items[$j]->calorias;
            }
        }

        // Comprueba si la combinacion actual cumple con los criterios:
        // - Las calorias totales son mayores o iguales a las minimas requeridas.
        // - El peso total es menor o igual al peso máximo permitido.
        if ($actualTotalcalorias >= $minCalorias && $actualPesoTotal <= $pesoMaximo) {
            // Si cumple con los criterios, verifica si es mejor que la combinacion actual.
            // Una combinacion es mejor si tiene un peso total menor.
            if ($actualPesoTotal < $minPesoTotal) {
                $minPesoTotal = $actualPesoTotal;       // Actualiza el peso total minimo.
                $bestCombination = $currentCombination; // Actualiza la mejor combinacion.
            }
        }
    }

    return $bestCombination; 
}

// Valores de ejemplo para el minimo de calorias y peso máximo.
$minCalorias = 15;
$pesoMaximo = 10;

// Elementos disponibles.
$items = [
    new Item("E1", 5, 3),
    new Item("E2", 3, 5),
    new Item("E3", 5, 2),
    new Item("E4", 1, 8),
    new Item("E5", 2, 3),
];

?>