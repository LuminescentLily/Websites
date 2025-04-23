<?php

  // generate an href using the existing first and last name variables, so the welcome message doesn't disappear
  function nav_url($query_name) {
    $link = (isset($_GET['first_name']) && isset($_GET['last_name'])) ?
      '?first_name=' . $_GET['first_name'] . '&last_name=' . $_GET['last_name'] . '&' . $query_name:
      '?' . $query_name;

    return $link;
  }

?>

<nav>
  <a href="<?php echo nav_url('DisplayNames'); ?>">Get Employee Names</a>
  <a href="<?php echo nav_url('EmployeeDepartment'); ?>">Get Employee Departments</a>
  <a href="<?php echo nav_url('EmployeeLastS'); ?>">Get Employee S to T</a>
  <a href="<?php echo nav_url('EmployeePF'); ?>">Get Employee PF</a>
  <a href="<?php echo nav_url('EmployeeSalaries10000'); ?>">Get Employee Salaries</a>
  <a href="<?php echo nav_url('TotalSalaries'); ?>">Get Total Salaries</a>
</nav>
