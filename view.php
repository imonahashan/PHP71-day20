<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$massage="";
if(isset($_POST['btn'])){
    $massage = Student::saveStudentInfo($_POST);
}
?>


<button><a href="view.php">Add student</a></button>
<button><a href="show.php">View student</a></button>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td><input type="text" name="mobile"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>

<h1 style="color: green;"><?php echo $massage; ?></h1>

