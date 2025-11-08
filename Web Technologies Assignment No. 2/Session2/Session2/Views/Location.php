<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div class="table-responsive">
        <table class="table table-primary">
            <a href="../Location/Create.php" class="btn btn-success m-3">Add Location</a>
            <thead>
                <tr>
                    <th scope="col">location_id</th>
                    <th scope="col">street_address</th>
                    <th scope="col">postal_code</th>
                    <th scope="col">city</th>
                    <th scope="col">state_province</th>
                    <th scope="col">country_id</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../Public/Location.php';
                    $c = new locations();
                    $result = $c->read();
                    
                    if ($result === false) {
                        echo '<tr><td colspan="6">Error fetching data</td></tr>';
                    } elseif (empty($result)) {
                        echo '<tr><td colspan="6">No locations found</td></tr>';
                    } else {
                         while($row = $result->fetch_assoc())
                        {
                            echo '
                                <tr>
                                    <td>'.$row['location_id'].'</td>
                                    <td>'.$row['street_address'].'</td>
                                    <td>'.$row['postal_code'].'</td>
                                    <td>'.$row['city'].'</td>
                                    <td>'.$row['state_province'].'</td>
                                    <td>'.$row['country_id'].'</td>
                                </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>