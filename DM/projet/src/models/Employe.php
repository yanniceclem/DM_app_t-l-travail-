<?php
require_once __DIR__ . '/../config/database.php';

class Employe {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM Employe");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM Employe WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO Employe (nom, prenom, poste, email) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['nom'], $data['prenom'], $data['poste'], $data['email']]);
    }

    public function update($id, $data) {
        $stmt = $this->conn->prepare("UPDATE Employe SET nom = ?, prenom = ?, poste = ?, email = ? WHERE id = ?");
        return $stmt->execute([$data['nom'], $data['prenom'], $data['poste'], $data['email'], $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM Employe WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getModesTravail($id_employe) {
        $stmt = $this->conn->prepare("SELECT type, jour FROM ModeTravail WHERE id_employe = ?");
        $stmt->execute([$id_employe]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastInsertId() {
        return $this->conn->lastInsertId();
    }    
}