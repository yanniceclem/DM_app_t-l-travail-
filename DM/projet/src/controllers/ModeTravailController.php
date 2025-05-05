<?php
require_once __DIR__ . '/../models/ModeTravail.php';

class ModeTravailController {
    private $model;

    public function __construct() {
        $this->model = new ModeTravail();
    }

    public function index($id_employe) {
        $modes = $this->model->getByEmploye($id_employe);
        include __DIR__ . '/../views/mode_travail/index.php';
    }

    public function create($data) {
        $this->model->create($data);
        header("Location: index.php?action=mode&id=" . $data['id_employe']);
    }

    public function delete($id_employe, $id_mode) {
        $this->model->delete($id_mode);
        header("Location: index.php?action=mode&id=$id_employe");
    }
}