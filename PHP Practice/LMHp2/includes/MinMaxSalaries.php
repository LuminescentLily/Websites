<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the maximum and minimum salary from the employees table (in
that order)';

  $sql = "
    SELECT MAX(salary) 'Max Salary', MIN(salary) 'Min Salary'
     FROM employees
    ORDER BY salary";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
