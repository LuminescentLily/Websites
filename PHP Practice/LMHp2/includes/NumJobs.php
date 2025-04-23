<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of different types of jobs available in the employees
table';

  $sql = "
    SELECT COUNT(DISTINCT job_id) 'Number of Job Types'
    FROM employees";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
