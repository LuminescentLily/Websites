<?php

include 'AddEmployee.html';
include 'display_results_table.php';


if(isset($_POST['submit'])){

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $hire_date = $_POST['hire'];
    $job_id = $_POST['job'];
    $com_pct = $_POST['commission'];
    $salary = $_POST['salary'];
    $man_id = $_POST['manager'];
    $depart_id = $_POST['depart'];

    $sql="SELECT employee_id FROM employees ORDER BY employee_id DESC LIMIT 1";
    $last_emp = mysqli_query($conn,$sql);

    $employ_id = get_one($last_emp) + 1;


    $sql = "INSERT INTO employees (first_name, last_name, email, phone_number, hire_date, job_id, salary, commission_pct, manager_id, department_id, employee_id) VALUES
('$first_name', '$last_name', '$email', '$phone', '$hire_date', '$job_id', '$salary', '$com_pct', '$man_id', '$depart_id', '$employ_id')";

    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
        $sql="SELECT * FROM employees WHERE CONCAT(employees.EMPLOYEE_ID) = '$employ_id'";
        $info=mysqli_query($conn,$sql);
        echo display_results_table($info);
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

}


function get_one($query) {
    // retrieve all the fields as an array
    $fields = mysqli_fetch_fields($query);

    // create rows of data
    $records = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $data_rows = '';
    foreach ($records as $record) {
        foreach ($fields as $field) {
            $data_rows .=  $record[$field->name];
        }
    }

    return $data_rows;
}

?>


