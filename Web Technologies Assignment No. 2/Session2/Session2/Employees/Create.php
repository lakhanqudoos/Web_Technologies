<?php require_once '../Templates/Header.php'; ?>


<?php
    require_once '../Public/Employee.php';

    $emp = new employees();

    if (isset($_POST['submit'])) {
        $employee_id = (int)$_POST['employee_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $hire_date = $_POST['hire_date'];
        $job_id = (int)$_POST['job_id'];
        $salary = (float)$_POST['salary'];
        $commission_pct = (float)$_POST['commission_pct'];
        $manager_id = (int)$_POST['manager_id'];
        $department_id = (int)$_POST['department_id'];

        $result = $emp->create($employee_id, $first_name, $last_name, $email, $phone_number, h_date: $hire_date, j_id: $job_id, s: $salary, c_id: $commission_pct, m_id: $manager_id, d_id: $department_id);

        if ($result) {
            header('location:../Views/Employee.php');
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
                    <label for="" class="form-label">Employee Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="employee_name"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Employee Name" />
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
                    <label for="" class="form-label">hire date</label>
                    <input
                        type="text"
                        class="form-control"
                        name="hire_date "
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Hire Date" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">salary</label>
                    <input
                        type="text"
                        class="form-control"
                        name="salary"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Salary" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Commission Percentage</label>
                    <select
                        class="form-select form-select-lg"
                        name="commission_pct"
                        id="">
                       <option selected>Select one</option>

                        <?php
                            require_once '../Public/Employee.php';
                            $c = new employees();
                            $result = $c->read();
                            foreach($result as $row)
                            {
                                echo '
                                      <option value="'.$row['employee_id'].'">
                                        '.$row['first_name'].'
                                        '.$row['last_name'].'
                                        '.$row['email'].'
                                        '.$row['phone_number'].'
                                        '.$row['job_id'].'
                                        '.$row['manager_id'].'
                                        '.$row['hire_date'].'
                                        '.$row['salary'].'
                                        '.$row['commission_pct'].'
                                        '.$row['department_id'].'
                                      </option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Employee" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
