<?php require_once '../Templates/Header.php'; ?>

<div    class="table-responsive">
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">F.NAME</th>
                <th scope="col">L.NAME</th>
                <th scope="col">Email</th>
                <th scope="col">salary</th>
                <th scope="col">J.ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
                require_once '../Public/Employees.php';

                $emp = new Employees();

                $results = $emp->getAllEmployees();

                while($row = $results->fetch_assoc()) {
                    echo '
                            <tr class="">
                                <td scope="row">'.$row['employee_id'].'</td>
                                <td>'.$row['first_name'].'</td>
                                <td>'.$row['last_name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['salary'].'</td>
                                <td>'.$row['job_id'].'</td>
                            </tr>
                    ';
                }

            ?>
        </tbody> 
    </table>


    <?php
            require_once '../Public/Employees.php';
            $emp = new Employees();
            $results = $emp->single_emp(200);
            $row = $results->fetch_assoc();
            echo "<br>".$row['first_name'];
    
    ?>
</div>




<?php require_once '../Templates/Footer.php'; ?>