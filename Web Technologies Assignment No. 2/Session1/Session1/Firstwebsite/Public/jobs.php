<?php 
       require_once '../Config/Database.php';

       class Jobs extends Database{
              public function getAllJobs(){
                     return $this->conn->query("SELECT * FROM jobs");
              }

              public function delete_job($id){
                     return $this->conn->query("DELETE FROM jobs WHERE job_id = $id");
              }

              public function single_job($id){
                     return $this->conn->query("SELECT * FROM jobs WHERE job_id = '$id'");
              }
       }
?>