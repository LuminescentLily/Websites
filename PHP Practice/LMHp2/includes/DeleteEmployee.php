<?php

include 'DeleteEmployee.html';

if(isset($_POST['button']))
{

       $option = $_POST['button'];
       $employ_id= $_SESSION["employ_id"];

       if($option == "Yes"){
           $sql = "DELETE FROM employees WHERE CONCAT(employees.EMPLOYEE_ID) = '$employ_id'";
           $var = mysqli_query($conn, $sql);

           if(mysqli_query($conn, $sql)){
               echo "Records deleted successfully that's why you don't see a record.";
               $sql = "SELECT * FROM employees WHERE CONCAT(employees.EMPLOYEE_ID) = '$employ_id'";
               $check=mysqli_query($conn, $sql);
               echo display_results_table($check);
           } else{
               echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
           }
       }
       else if($option == "No"){echo "Please enter a new Employee ID";}

}

?>
