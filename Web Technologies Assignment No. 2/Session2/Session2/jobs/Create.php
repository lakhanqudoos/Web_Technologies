<?php require_once '../Templates/Header.php'; ?>


<?php
require_once '../Public/jobs.php';

$loc = new jobs();

if (isset($_POST['submit'])) {
    $job_id = (int)$_POST['job_id'];
    $job_title = $_POST['job_title'];
    $min_salary = $_POST['min_salary'];
    $max_salary = $_POST['max_salary'];


    $result = $loc->create($job_id, $job_title, $min_salary, $max_salary);
    if ($result) {
        header('location:../Views/jobs.php');
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
                    <label for="" class="form-label">Job ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="job_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Job ID" />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Job Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="job_title"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Job Title" />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Min Salary</label>
                    <input
                        type="text"
                        class="form-control"
                        name="min_salary    "
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Min Salary" />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Max Salary</label>
                    <input
                        type="text"
                        class="form-control"
                        name="max_salary"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Max Salary" />
                </div>
                
                <option selected>Select One</option>
                    <select
                    
                        class="form-select form-select-lg"
                        name="commission_pct"
                        id=""
                    
                    >
                        <?php
                            require_once '../Public/jobs.php';
                            $c = new jobs();
                            $result = $c->read();
                            foreach($result as $row)
                            {
                                echo '
                                      <option value="'.$row['job_id'].'">
                                      '.$row['job_title'].'
                                      '.$row['min_salary'].'
                                      '.$row['max_salary'].'
                                      </option> 
                                ';
                            }
                        ?>    
                    </select>
                
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Job" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>