<?php require_once '../Templates/Header.php'; ?>

<div class="table-responsive">
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Job ID</th>
                <th scope="col">Job Title</th>
                <th scope="col">Minimum Salary</th>
                <th scope="col">Maximum Salary</th>
            </tr>
        </thead>
        <tbody>
        <?php
                require_once '../Public/jobs.php';

                $emp = new jobs();

                $results = $emp->getAllJobs();

                while($row = $results->fetch_assoc()) {
                    echo '
                            <tr class="">
                                <td scope="row">'.$row['job_id'].'</td>
                                <td>'.$row['job_title'].'</td>
                                <td>'.$row['min_salary'].'</td>
                                <td>'.$row['max_salary'].'</td>
                            </tr>
                    ';
                }

            ?>
        </tbody> 
    </table>

    <hr>

    <?php
        require_once '../Public/jobs.php';

        $jobs = new Jobs();
        $result = $jobs->single_job("AC_MGR"); 
        $row = $result->fetch_assoc();
        echo '<br>'.$row['job_title'];
    ?>
</div>
    

<?php require_once '../Templates/Footer.php'; ?> 