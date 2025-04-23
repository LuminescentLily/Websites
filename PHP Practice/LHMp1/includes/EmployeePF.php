<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the names (last_name, first_name), salary, PF of all the employees (PF is calculated as 12% of salary) from the employees table.  Order the results by last name in ascending order, then by first name in ascending order.  [call the file EmployeePF.php]';

  $sql = "
    SELECT first_name,last_name,salary,salary*.12 PF
    FROM employees";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
