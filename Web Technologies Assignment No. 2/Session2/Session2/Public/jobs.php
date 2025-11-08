<?php 
    require_once '../Config/Database.php';
    class jobs extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from jobs");
        }
        public function create($j_id,$j_title,$min_salary,$max_salary)
        {
            $sql = "insert into jobs(job_id,job_title,min_salary,max_salary) values (?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('isss', $j_id, $j_title, $min_salary, $max_salary);
            return $stmt->execute();
        }
    }

?>