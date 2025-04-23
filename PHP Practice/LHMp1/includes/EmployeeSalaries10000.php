<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the employee ID, names (first_name, last_name), salary from the employees table in ascending order of salary.  Limit the output to only those employees with a salary greater than or equal to $10,000 only.  [call the file EmployeeSalaries10000.php]';

  $sql = "
    SELECT employee_id,first_name,last_name,salary
    FROM employees
    ORDER BY salary <= 10000";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
