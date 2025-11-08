<?php 
    require_once '../Config/Database.php';
    class employees extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from employees");
        }
        public function create($e_id,$f_name,$l_name,$email,$phone,$j_id,$m_id,$h_date,$s,$c_id,$d_id)
        {
            $sql = "insert into employees(employee_id,first_name,last_name,email,phone_number,job_id,manager_id,hire_date,salary,commission_pct,department_id) values (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('issssiisssi', $e_id, $f_name, $l_name, $email, $phone, $h_date, $j_id, $s, $c_id, $m_id, $d_id);
            return $stmt->execute();
        }
    }

?>