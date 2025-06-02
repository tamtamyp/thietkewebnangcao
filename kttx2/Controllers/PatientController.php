<?php
    class PatientController extends Controller {
        function index() {
            $model = $this->model("Patient");
            $this->view("Index", $model->getAll());
        }
        function delete($id) {
            $model = $this->model("Patient");
            $model->setID($id);
            $this->view("delete", $model->getByID($id));
        }
        function deleteById($id) {
            $model = $this->model("Patient");
            $model->setID($id);
            $model->deleteByID($id);
            header("Location: /kttx2/Patient");
        }
    }    
?>