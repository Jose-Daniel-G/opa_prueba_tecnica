<?php

$optimalItems = buscaElementosOptimos($minCalorias, $pesoMaximo, $items);

if (!empty($optimalItems)) {
    echo "<p class='lead'>¡Hemos encontrado la mejor combinación para tu expedición!</p>";
    echo "<ul class='list-group mb-3'>";
    // $totalPeso = 0;
    // $totalCalorias = 0;
    // Se re-itera para mostrar los elementos óptimos, ya que $optimalItems fue calculado arriba
    foreach ($optimalItems as $item) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center rounded-lg'>";
        echo "<span><strong>" . htmlspecialchars($item->nombre) . "</strong></span>";
        echo "<span class='badge bg-info text-dark'>Peso: " . htmlspecialchars($item->peso) . " kg</span>";
        echo "<span class='badge bg-warning text-dark'>Calorías: " . htmlspecialchars($item->calorias) . "</span>";
        echo "</li>";
        // $totalPeso += $item->peso;
        // $totalCalorias += $item->calorias;
    }
    echo "</ul>";
    echo "<p class='h4 mt-4'><strong>Peso total de la combinación óptima: <span class='text-danger'> " . htmlspecialchars($totalPeso) . " kg</span></strong></p>";
    echo "<p class='h4'><strong>Calorías totales de la combinación óptima: <span class='text-success'> " . htmlspecialchars($totalCalorias) . "</span></strong></p>";
} else {
    echo "<p class='alert alert-warning text-center rounded-lg'>No se encontró ninguna combinación de elementos que cumpla con todos los requisitos para los valores actuales.</p>";
}
?>