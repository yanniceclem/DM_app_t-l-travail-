<?php
require_once __DIR__ . '/../models/Employe.php';

class EmployeController {
    private $model;

    public function __construct() {
        $this->model = new Employe();
    }

    public function index() {
        $employes = $this->model->getAll();
        include __DIR__ . '/../views/employe/index.php';
    }

    public function show($id) {
        $employe = $this->model->getById($id);
        $modes = $this->model->getModesTravail($id);
        include __DIR__ . '/../views/employe/show.php';
    }

    public function create($data) {
        $this->model->create($data);
        $lastId = $this->model->getLastInsertId();
    
        // Créer un mode de travail si les données sont présentes
        if (!empty($data['type']) && !empty($data['jour'])) {
            require_once __DIR__ . '/../models/ModeTravail.php';
            $modeTravailModel = new ModeTravail();
            $modeTravailModel->create([
                'id_employe' => $lastId,
                'type' => $data['type'],
                'jour' => $data['jour']
            ]);
        }
    
        header("Location: index.php");
    }    

    public function update($id, $data) {
        $this->model->update($id, $data);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }

    public function createForm() {
        include __DIR__ . '/../views/employe/create.php';
    }    
}