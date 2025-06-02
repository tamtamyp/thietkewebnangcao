<?php
    require_once("Core/Database.php");

    class Patient extends Database {
        private $iD;
        private $fullName;
        private $gender;
        private $birthYear;
        private $address;
        private $mobile;

        function setID($iD) {
            $this->iD = $iD;
        }
        function setFullName($fullName) {
            $this->fullName = $fullName;
        }
        function setBirthYear($birthYear) {
            $this->birthYear = $birthYear;
        }
        function setGender($gender) {
            $this->gender = $gender;
        }

        function setAddress($address) {
            $this->address = $address;
        }
        function setMobile($mobile) {
            $this->mobile = $mobile;
        }
        function getAll() {
            $sql = "SELECT * FROM Patient";
            return $this->conn->query($sql);    
        }
        function getByID($id) {
            $sql = "SELECT * FROM Patient where  ID = '{$id}' LIMIT 1";
            return $this->conn->query($sql); 
        }
        function deleteByID($id) 
        {
            $sql = "DELETE FROM Patient WHERE ID = '{$id}'";
            return $this->conn->query($sql);
        }
    }
?>