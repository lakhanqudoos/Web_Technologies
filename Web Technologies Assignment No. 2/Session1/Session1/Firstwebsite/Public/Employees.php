<?php

    require_once '../Config/Database.php';

    class Employees extends Database{

        public function getAllEmployees(){
            return $this->conn->query("SELECT * FROM employees");
        }
        public function delete_emp($id)
        {
            return $this->conn->query("DELETE FROM employees WHERE employee_id = $id");
        }
        public function single_emp($id)
        {
            return $this->conn->query("select * FROM employees WHERE employee_id = $id");
        }
    }
 
?>