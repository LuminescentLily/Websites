<?php

  include 'display_results_table.php';

  $question = 'Write a query to get all employee details from the employees table for employees whose last names start with an S or T.  Order by last name, descending then by first name, descending.  [call the file EmployeeLastS.php]';

  $sql = "
    SELECT *
    FROM employees
    WHERE last_name REGEXP '^[st]'
    ORDER BY last_name, first_name DESC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
