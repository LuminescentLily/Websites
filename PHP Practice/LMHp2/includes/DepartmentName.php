<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the department name for all employees. Include the employee’s
first name, last name, and department name in your output (In that order).  Sort the list by
department name in ascending order, then by employee last name in ascending order and
employee first name in ascending order (this query uses multiple tables)';

  $sql = "
    SELECT first_name 'First Name', last_name 'Last Name', department_name 'Department Name'
    FROM employees, departments
    ORDER BY department_name ASC, last_name ASC, first_name ASC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
