<?php 
    require_once '../Config/Database.php';
    class locations extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from locations");
        
        }
        
        public function create($location_id,$street_address, $postal_code, $city, $state_province, $country_id)
        {
            $sql = "insert into locations(location_id,street_address, postal_code, city, state_province, country_id) VALUES (?,?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('isisss',$location_id,$street_address, $postal_code, $city, $state_province, $country_id);
            return $stmt->execute();
        }
    }
?>