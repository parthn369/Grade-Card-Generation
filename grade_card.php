<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="grade_card_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
    <body>
        
        <div class="box">

            <div class="sem_rep">
                <h3> Semester Results - <a id="date_today"></a> </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 width="100%">Roll Number: <a id="rollno input"></a> </h5>
                    </div>
                    <div class="col-md-6">
                        <h5 width="100%">Semester: <a id="sem input"></a> </h5>
                    </div>
                </div>
            </div>

            <table class="grade_table table-responsive">
                <!--first row / headings-->
                <thead>
                    <tr>
                        <th scope="col">Subject Code</th>
                        <th scope="col" colspan="2">Subject Name</th>
                        <th scope="col">Credits</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>

                <!--database data-->
                <tbody>
                    <?php

                        include "config.php";

                        //Get row data from database
                        $query = "SELECT * FROM grade_data";
                        $result_of_query = mysqli_query($db_connect, $query);
                        $rows = mysqli_num_rows($result_of_query);
                        
                        while($row_data = mysqli_fetch_array($result_of_query)){
                        ?>
                            <tr>
                                <td><?php echo $row_data['subject_code']; ?></td>
                                <td colspan="2"><?php echo $row_data['subject_name']; ?></td>
                                <td><?php echo $row_data['credit']; ?></td>
                                <td><?php echo $row_data['grade']; ?></td>
                            </tr>
                    <?php
                        }

                    ?>

                </tbody>

                <!--GPA Total-->
                <tfoot>
                    <tr>
                        <td colspan="3" ></td>
                        <td colspan="2">GPA : <p id="gpa" class="gpa"></p></td>
                    </tr>
                </tfoot>
            </table>
            
            
            
                <!--Key template-->
            
            <table class="key_table table-responsive">
                 <p id="key">Key:</p>
                <thead>
                    <th scope="col">S</th>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">C</th>
                    <th scope="col">D</th>
                    <th scope="col">E</th>
                    <th scope="col">F</th>
                    <th scope="col">Z</th>
                    <th scope="col">W</th>
                    <th scope="col">*</th>
                </thead>

                <tbody>
                    <th>10</th>
                    <th>9</th>
                    <th>8</th>
                    <th>7</th>
                    <th>6</th>
                    <th>5</th>
                    <th>Fail</th>
                    <th>Absent</th>
                    <th>Withdrawn</th>
                    <th>Withheld</th>
                </tbody>
            </table>
            
            <div class="button">
                <button type="button" onclick="location.href = '#';" id="myButton"  >Check Another Result</button>
            </div>
        </div>
    

        <script type="text/JavaScript">
            const today = new Date();
            const year = today.getFullYear();
            const month = today.toLocaleString('default', { month: 'long' })

            document.getElementById("date_today").innerHTML = month + year;
        </script>
        
    </body>
</html>

