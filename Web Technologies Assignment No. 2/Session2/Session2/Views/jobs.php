<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <table class="table table-primary">
            <a href="../jobs/Create.php" class="btn btn-success m-3">Add Job</a>
            <thead>
                <tr>
                    <th scope="col">Job ID</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Min Salary</th>
                    <th scope="col">Max Salary</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/jobs.php';
                            $c = new jobs();
                            $result = $c->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['job_id'].'</td>
                                        <td>'.$row['job_title'].'</td>
                                        <td>'.$row['min_salary'].'</td>
                                        <td>'.$row['max_salary'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>