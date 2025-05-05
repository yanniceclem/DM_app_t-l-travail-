<?php
require_once __DIR__ . '/../config/database.php';

class ModeTravail {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getByEmploye($id_employe) {
        $stmt = $this->conn->prepare("SELECT * FROM ModeTravail WHERE id_employe = ?");
        $stmt->execute([$id_employe]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO ModeTravail (id_employe, type, jour) VALUES (?, ?, ?)");
        return $stmt->execute([$data['id_employe'], $data['type'], $data['jour']]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM ModeTravail WHERE id = ?");
        return $stmt->execute([$id]);
    }
}