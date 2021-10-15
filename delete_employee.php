<?php
    session_start();
    include "database.php";
    $employee_id = $_GET['id'];
    $date_today = date("Y-m-d h:i");

    // var_dump($employee_id);
    $con = new database();
    $con->delete_employees("employees",$date_today,$employee_id);
    $_SESSION['msg'] = 'Successfully Deleted';
    if($con == true)
    {
        header('location:employees.php?message=Successfully Deleted');
    }



?>