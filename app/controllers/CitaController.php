<?php
require_once 'C:/xampp/htdocs/Agendamiento-Pet-Stylo/app/models/Cita.php';

class CitaController {
    private $citaModel;

    public function __construct() {
        $this->citaModel = new Cita();
    }

    public function index() {
        $citas = $this->citaModel->getCitas();
        include 'views/cita/indexAgen.php';
    }

    public function edit($id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'nombre_mascota' => $_POST['nombre_mascota'],
                'raza' => $_POST['raza'],
                'fecha_ingreso' => $_POST['fecha_ingreso'],
                'edad_mascota' => $_POST['edad_mascota'],
                'cuidado' => $_POST['cuidado'],
            ];
            $this->citaModel->updateCita($id, $data);
            header('Location: /index.php');
            exit();
        } else {
            $cita = $this->citaModel->getCitaById($id);
            include 'views/cita/edit.php';
        }
    }

    public function delete($id) {
        $this->citaModel->deleteCita($id);
        header('Location: /index.php');
        exit();
    }
}

