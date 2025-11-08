<?php 
    require_once '../Config/Database.php';
    class job_history extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from job_history");
        }
        public function create($e_id,$s_date,$e_date,$job_id,$department_id)
        {
            $sql = "insert into job_history(employee_id,start_date,end_date,job_id,department_id) values (?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('issss', $e_id, $s_date, $e_date, $job_id, $department_id);
            return $stmt->execute();
        }
    }

?>