<?php require_once '../Templates/Header.php'; ?>


<?php
require_once '../Public/Location.php';

$loc = new Locations();

if (isset($_POST['submit'])) {
    $location_id = (int)$_POST['location_id'];
    $street_address = $_POST['street_address'];
    $postal_code = $_POST['postal_code'];
    $city = $_POST['city'];
    $state_province = $_POST['state_province'];
    $country_id = $_POST['country_id'];
    
    $result = $loc->create($location_id, $street_address, $postal_code, $city, $state_province, $country_id);
    if ($result) {
        header('location:../Views/Location.php');
    } else {
        echo '<p class="container bg-danger text-center text-light">Failed TO Store<p>';
    }
}

?>

<div class="container-fluid my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Location ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="location_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Location ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Street Address</label>
                    <input
                        type="text"
                        class="form-control"
                        name="street_address"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Street Address" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Postal Code</label>
                    <input
                        type="text"
                        class="form-control"
                        name="postal_code"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Postal Code" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter City" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">State/Province</label>
                    <input
                        type="text"
                        class="form-control"
                        name="state_province"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter State/Province" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Country ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="country_id"
                        id="">
                        <option selected>Select one</option>

            

                        <?php
                            require_once '../Public/Location.php';
                            $c = new locations();
                            $result = $c->read();
                            foreach($result as $row)
                            {
                                echo '
                                      <option value="'.$row['location_id'].'">
                                      '.$row['street_address'].'
                                      '.$row['postal_code'].'
                                      '.$row['city'].'
                                      '.$row['state_province'].'
                                      '.$row['country_id'].'
                                      </option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Location" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>