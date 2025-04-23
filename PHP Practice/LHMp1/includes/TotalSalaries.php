<?php

  include 'display_sum_table.php';

  $question = 'Write a query to get the total salaries of all employees in the employees table.  Label the output as Total Salaries and make sure the value is in currency format. [call the file TotalSalaries.php]';

  $sql = "
    SELECT SUM(salary)
    FROM employees";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
       display_sum_table($get_names);
