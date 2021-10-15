<?php
    session_start();
    include "database.php";
    // var_dump($_POST);
    if(isset($_POST['submit']))
    {
        $employee_id = $_GET['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $sex = $_POST['sex'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $date_birth = new DateTime($birthday);
        $today = new DateTime();
        $date_today = date("Y-m-d h:i");
        $age = $date_birth->diff($today);
        $real_age = $age->y;
        $data_final = [
            'last_name' => $first_name,
            'first_name' => $last_name,
            'middle_name' => $middle_name,
            'sex' => $sex,
            'birthdate' => $birthday,
            'age' => $real_age,
            'address' => $address,
            'tel_phone' => $tel,
            'updated_at' =>$date_today,
        ];
        // var_dump($data_final);
        $con = new database();
        $_SESSION['msg'] = 'Successfully Updated';
        $con->save_edit_employee("employees",$data_final,$employee_id);

        if($con == true)
        {
            header('location:employees.php');
        }


    }


?>