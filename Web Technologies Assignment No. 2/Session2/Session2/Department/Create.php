<?php require_once '../Templates/Header.php'; ?>


<?php
require_once '../Public/Departments.php';

$loc = new departments();

if (isset($_POST['submit'])) {
    $department_id = (int)$_POST['department_id'];
    $department_name = $_POST['department_name'];
    $manager_id = $_POST['manager_id'];
    $location_id = $_POST['location_id'];


    $result = $loc->create($department_id, $department_name, $manager_id, $location_id);
    if ($result) {
        header('location:../Views/Departments.php');
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
                    <label for="" class="form-label">Department ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="department_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Department ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Department Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="department_name"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Department Name" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Manager ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="manager_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Manager ID" />
                </div>
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
                    <label for="" class="form-label">Job ID</label>
                    <select name="job_id" class="form-select">
                        <option selected>Select one</option>

                        <?php
                            require_once '../Public/Departments.php';
                            $c = new departments();
                            $result = $c->read();
                            foreach($result as $row)
                            {
                                echo '
                                      <option value="'.$row['department_id'].'">
                                      '.$row['department_name'].'
                                      '.$row['manager_id'].'
                                      '.$row['location_id'].'
                                      </option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Department" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>