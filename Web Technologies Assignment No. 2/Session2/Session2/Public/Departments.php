<?php 
    require_once '../Config/Database.php';
    class departments extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from departments");
        }
        public function create($d_id,$d_name,$m_id,$l_id,)
        {
            $sql = "insert into departments(department_id,department_name,manager_id,location_id) values (?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('isii',$d_id,$d_name,$m_id,$l_id);
            return $stmt->execute();
        }
    }

?>