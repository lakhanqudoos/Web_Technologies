<?php 
    require_once '../Config/Database.php';
    class Countries extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from countries");
        }

        public function search($search_term)
        {
            $sql = "SELECT country_id, country_name, region_id FROM countries 
                    WHERE country_name LIKE ? OR country_id LIKE ?";
            
            $stmt = $this->con->prepare($sql);
            $param_term = "%" . $search_term . "%"; // Add the wildcards
            $stmt->bind_param('ss', $param_term, $param_term); // Bind the search term
            $stmt->execute();
            
            return $stmt->get_result(); // Return the result set
        }

        public function create($c_id,$c_name,$r_id)
        {
            $sql = "insert into countries(country_id,country_name,region_id) values (?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('ssi',$c_id,$c_name,$r_id);
            return $stmt->execute();
        }
    }

?>