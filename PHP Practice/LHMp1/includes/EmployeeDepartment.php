<?php

  include 'display_results_table.php';

  $question = 'Write a query to get unique department IDs from the employees table using an alias for department ID of  “Department ID”.  Order the results in descending order by the Department ID attribute. [call the file EmployeeDepartment.php]';

  $sql = "
    SELECT DISTINCT department_id
    FROM employees";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
