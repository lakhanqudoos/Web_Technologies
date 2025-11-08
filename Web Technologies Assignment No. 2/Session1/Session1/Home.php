<?php
    if(isset($_POST['Submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['opt'];
        $result = 0;
        switch($op)
        {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                if($num1 > $num2)
                {
                    $result = $num1-$num2;
                }
                else{
                    $result = $num2 - $num1;
                }
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 != 0 && $num1 != 0)
                {
                    if($num1 > $num2)
                        {
                            $result = $num1/$num2;
                        }
                        else{
                            $result = $num2 / $num1;
                        }
                }
                else
                {
                    $result = "Error: Division by zero";
                }
                break;
            default:
                $result = "Invalid operator";
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       
        <div class="container">
            <h1 class="text-center">Result of Two Numbers : <?php echo $result; ?></h1>
            <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Num1</label>
                <input
                    type="number"
                    class="form-control"
                    name="num1"
                    placeholder="Enter any number"
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Num2</label>
                <input
                    type="number"
                    class="form-control"
                    name="num2"
                    placeholder="Enter any number"
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Operator</label>
                <input
                    type="text"
                    class="form-control"
                    name="opt"
                    placeholder="Enter any operator (+, -, *, /)"
                />
                
            </div>

            <input type="submit" value="Submit" name="Submit" class="btn btn-primary" />
            </form>
            
        </div>

        <div
            class="table-responsive m-3"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Frequency</th>
                        <th scope="col">Table Number</th>
                        <th scope="col">result</th>
                    </tr>
                </thead>
                <tbody>
                    
                  <?php

                    for($i=0;$i<=$num2;$i++)
                    {
                        echo '
                                <tr class="">
                                    <td scope="row">'.$i.'</td>
                                    <td>'.$num1.'</td>
                                    <td>'.($i*$num1).'</td>
                                </tr>
                        ';
                    }
                  ?>
                </tbody>
            </table>
        </div>
        b
        
    </body>
</html>

<script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
