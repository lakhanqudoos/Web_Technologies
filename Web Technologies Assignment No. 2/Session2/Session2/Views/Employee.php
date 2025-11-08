<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <table class="table table-primary">
            <a href="../Employees/Create.php" class="btn btn-success m-3">Add Employee</a>
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Department ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Hire Date</th>
                    <th scope="col">Job ID</th>
                    <th scope="col">commission_pct</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Manager ID</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/Employee.php';
                            $c = new employees();
                            $result = $c->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['employee_id'].'</td>
                                        <td>'.$row['first_name'].'</td>
                                        <td>'.$row['last_name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['phone_number'].'</td>
                                        <td>'.$row['hire_date'].'</td>
                                        <td>'.$row['job_id'].'</td>
                                        <td>'.$row['salary'].'</td>
                                        <td>'.$row['commission_pct'].'</td>
                                        <td>'.$row['manager_id'].'</td>
                                        <td>'.$row['department_id'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>