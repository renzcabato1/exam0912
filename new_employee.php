<?php
    session_start();
    include "database.php";
    // var_dump($_POST);
    if(isset($_POST['submit']))
    {
        $employee_id = $_POST['employee_number'];
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
            'employee_number' => $employee_id,
            'last_name' => $first_name,
            'first_name' => $last_name,
            'middle_name' => $middle_name,
            'sex' => $sex,
            'birthdate' => $birthday,
            'age' => $real_age,
            'address' => $address,
            'tel_phone' => $tel,
            'created_at' =>$date_today,
            'updated_at' =>$date_today,
        ];
        // var_dump($data_final);
        $con = new database();
      
        $con->id_search("employees",$employee_id);
        $result = $con->sql;
        if($result->num_rows > 0)
        {
            $_SESSION['msg_error'] = 'Please enter new Employee ID(Duplicate Record)';
            header('location:employees.php');
        }
        else
        {
            $con->new_employee("employees",$data_final);
            $_SESSION['msg'] = 'Successfully Created';
            if($con == true)
            {
                header('location:employees.php');
            }
        }
      


    }


?>