<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <table class="table table-primary">
            <a href="../job_history/Create.php" class="btn btn-success m-3">Add job History</a>
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Job ID</th>
                    <th scope="col">Department ID</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/job_history.php';
                            $c = new job_history();
                            $result = $c->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['employee_id'].'</td>
                                        <td>'.$row['start_date'].'</td>
                                        <td>'.$row['end_date'].'</td>
                                        <td>'.$row['job_id'].'</td>
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