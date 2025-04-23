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
    <a href="<?php echo nav_url('MinMaxSalaries'); ?>">Min Max Salaries</a>
    <a href="<?php echo nav_url('NumEmployees'); ?>">Num Employees</a>
    <a href="<?php echo nav_url('MarketingEmployees'); ?>">Marketing Employees</a>
    <a href="<?php echo nav_url('NumJobs'); ?>">Num Jobs</a>
    <a href="<?php echo nav_url('DepartmentName'); ?>">Department Name</a>
    <a href="<?php echo nav_url('UniqueFirstNames'); ?>">Unique First Names</a>
    <a href="<?php echo nav_url('FirstThreeCharacters'); ?>">First Three Characters</a>
    <a href="<?php echo nav_url('AddEmployee'); ?>">Add Employee</a>
    <a href="<?php echo nav_url('DeleteEmployee'); ?>">Delete Employee</a>
</nav>
