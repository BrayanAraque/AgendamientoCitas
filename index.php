<?php
require_once 'app/controllers/CitaController.php';

$citaController = new CitaController();

// Enrutamiento
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action === 'edit' && $id) {
    $citaController->edit($id);
} elseif ($action === 'delete' && $id) {
    $citaController->delete($id);
} else {
    $citaController->index();
}
?>

<script>
    function editarCita(id) {
        window.location.href = 'index.php?action=edit&id=' + id;
    }

    function eliminarCita(id) {
    if (confirm("¿Está seguro de que desea eliminar esta cita?")) {
        window.location.replace('index.php?action=delete&id=' + id);
    }
}

</script>
