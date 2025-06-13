        <?php
            // Se re-ejecuta la función para mostrar los resultados en la sección HTML,
            // aunque en una aplicación real, esto se haría una sola vez y los resultados
            // se almacenarían en variables para usarlos en el HTML.
            $optimalItems = buscaElementosOptimos($minCalorias, $pesoMaximo, $items);

            if (!empty($optimalItems)) {
                echo "<p class='lead'>¡Hemos encontrado la mejor combinación para tu expedición!</p>";
                echo "<ul class='list-group mb-3'>";
                $totalWeight = 0;
                $totalcalorias = 0;
                foreach ($optimalItems as $item) {
                    echo "<li class='list-group-item d-flex justify-content-between align-items-center rounded-lg'>";
                    echo "<span><strong>" . $item->nombre . "</strong></span>";
                    echo "<span class='badge bg-info text-dark'>Peso: " . $item->peso . " kg</span>";
                    echo "<span class='badge bg-warning text-dark'>Calorías: " . $item->calorias . "</span>";
                    echo "</li>";
                    $totalWeight += $item->peso;
                    $totalcalorias += $item->calorias;
                }
                echo "</ul>";
                echo "<p class='h4 mt-4'><strong>Peso total de la combinación óptima: <span class='text-danger'> " . $totalWeight . " kg</span></strong></p>";
                echo "<p class='h4'><strong>Calorías totales de la combinación óptima: <span class='text-success'> " . $totalcalorias . "</span></strong></p>";
            } else {
                echo "<p class='alert alert-warning text-center rounded-lg'>No se encontró ninguna combinación de elementos que cumpla con todos los requisitos.</p>";
            }
        ?>