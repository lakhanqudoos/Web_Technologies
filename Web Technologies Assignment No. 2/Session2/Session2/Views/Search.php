<?php
require_once '../Templates/Header.php';
require_once '../Public/Countries.php';

$results_data = null;
$search_query = ""; 

if (isset($_POST['submit_search'])) {

    $search_query = $_POST['search_query']; 


    $country = new Countries();
    $results_data = $country->search($search_query); 
    

}

?>

<div class="container my-3">
    <h3>Search Results <?php echo htmlspecialchars($search_query); ?></h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Country ID</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Region ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($results_data && $results_data->num_rows > 0) {
                
                    while ($row = $results_data->fetch_assoc()) {
                        echo '
                        <tr class="">
                            <td>' . htmlspecialchars($row['country_id']) . '</td>
                            <td>' . htmlspecialchars($row['country_name']) . '</td>
                            <td>' . htmlspecialchars($row['region_id']) . '</td>
                        </tr>';
                    }
                } elseif (isset($_POST['submit_search'])) {
        
                    echo '<tr class=""><td colspan="3">No results found for "'.$search_query.'".</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
require_once '../Templates/Footer.php'; 
?>
