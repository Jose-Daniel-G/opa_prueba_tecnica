<?php include 'item.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta nombre="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software de Excursionistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Calculadora de Elementos para Excursionismo</h1>
        <p class="lead text-center">Encuentra la combinación óptima de equipo para tu aventura.</p>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card rounded-lg shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Requisitos de Escalada</h5>
                        <p class="card-text mb-1"><strong>Mínimo de calorías requeridas:</strong> <span class="badge bg-primary fs-6"><?php echo $minCalorias; ?></span></p>
                        <p class="card-text"><strong>Peso máximo permitido:</strong> <span class="badge bg-danger fs-6"><?php echo $pesoMaximo; ?></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded-lg shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Elementos Disponibles</h5>
                        <table class="table table-bordered table-striped rounded-lg">
                            <thead>
                                <tr>
                                    <th>Elemento</th>
                                    <th>Peso (kg)</th>
                                    <th>Calorías</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td><?php echo $item->nombre; ?></td>
                                        <td><?php echo $item->peso; ?></td>
                                        <td><?php echo $item->calorias; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-5 mb-3">Resultados de la Combinación Óptima</h2>
        <?php include 'items_optimos.php' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>