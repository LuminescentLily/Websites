<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of employees working in the Marketing department
with a job title of Marketing Manager.';

  $sql = "
    SELECT job_title 'Job Title', COUNT(*) 'Number of Employees'
     FROM jobs
    WHERE job_title='Marketing Manager'";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
