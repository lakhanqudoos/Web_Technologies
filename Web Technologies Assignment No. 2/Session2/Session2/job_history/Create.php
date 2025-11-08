<?php require_once '../Templates/Header.php'; ?>


<?php
require_once '../Public/job_history.php';

$loc = new job_history();

if (isset($_POST['submit'])) {
    $employee_id = (int)$_POST['employee_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $job_id = (int)$_POST['job_id'];
    $department_id = (int)$_POST['department_id'];


    $result = $loc->create($employee_id, $start_date, $end_date, $job_id, $department_id);
    if ($result) {
        header('location:../Views/job_history.php');
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
                    <label for="" class="form-label">Employee ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="employee_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Employee ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Start Date</label>
                    <input
                        type="text"
                        class="form-control"
                        name="start_date"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Start Date" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">End Date</label>
                    <input
                        type="text"
                        class="form-control"
                        name="end_date"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter End Date" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Job ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="job_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Job ID " />
                </div>
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

                    <option selected>Select one</option>
                    <Select
                    
                        class="form-select form-select-lg"
                        name="commission_pct"
                        id="">

                        <?php
                            require_once '../Public/jobs.php';
                            $c = new job_history();
                            $result = $c->read();
                            foreach($result as $row)
                            {
                                echo '
                                      <option value="'.$row['employee_id'].'">
                                      '.$row['start_date'].'
                                      '.$row['end_date'].'
                                      '.$row['job_id'].'
                                      '.$row['department_id'].'
                                      </option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Job History" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>