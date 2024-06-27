<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
    <link rel="stylesheet" href="/Agendamiento-Pet-Stylo/public/styles/admin.css">
</head>
<body>
    <?php include __DIR__ . '/../header.php'; ?>

    <div class="container">
        <h2>Editar Cita</h2>
        <form action="index.php?action=edit&id=<?php echo $cita['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="nombre_mascota" class="form-label">Nombre Mascota</label>
                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="<?php echo $cita['nombre_mascota']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <input type="text" class="form-control" id="raza" name="raza" value="<?php echo $cita['raza']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $cita['fecha_ingreso']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="edad_mascota" class="form-label">Edad Mascota</label>
                <input type="number" class="form-control" id="edad_mascota" name="edad_mascota" value="<?php echo $cita['edad_mascota']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cuidado" class="form-label">Cuidado</label>
                <input type="text" class="form-control" id="cuidado" name="cuidado" value="<?php echo $cita['cuidado']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Cita</button>
        </form>
    </div>
</body>
</html>
