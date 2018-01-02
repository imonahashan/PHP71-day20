<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$massage="";

$query_result = Student::getAllStudentInfo();
//
//while ($student = mysqli_fetch_assoc($query_result)){
//    echo '<pre>';
//    print_r($student);
//}


?>


    <table border="1" width="700">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Mobile Number</th>

        </tr>
        <?php while ($student = mysqli_fetch_assoc($query_result)){ ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['mobile']; ?></td>
        </tr>
        <?php } ?>
    </table>

