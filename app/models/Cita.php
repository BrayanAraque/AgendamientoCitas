<?php
require_once __DIR__ . '/Database.php';

class Cita {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getCitas() {
        $stmt = $this->db->prepare("SELECT * FROM citas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCitaById($id) {
        $stmt = $this->db->prepare("SELECT * FROM citas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCita($id, $data) {
        $stmt = $this->db->prepare("UPDATE citas SET nombre_mascota = :nombre_mascota, raza = :raza, fecha_ingreso = :fecha_ingreso, edad_mascota = :edad_mascota, cuidado = :cuidado WHERE id = :id");
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function deleteCita($id) {
        $stmt = $this->db->prepare("DELETE FROM citas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

