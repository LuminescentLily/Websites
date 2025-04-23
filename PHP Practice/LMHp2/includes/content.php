<section>

    <?php

    if (isset($_GET['MinMaxSalaries'])) {
        include 'MinMaxSalaries.php';
    } else if (isset($_GET['NumEmployees'])) {
        include 'NumEmployees.php';
    }else if (isset($_GET['MarketingEmployees'])) {
        include 'MarketingEmployees.php';
    }else if (isset($_GET['NumJobs'])) {
        include 'NumJobs.php';
    }else if (isset($_GET['DepartmentName'])) {
        include 'DepartmentName.php';
    }else if (isset($_GET['UniqueFirstNames'])) {
        include 'UniqueFirstNames.php';
    }else if (isset($_GET['FirstThreeCharacters'])) {
        include 'FirstThreeCharacters.php';
    }else if (isset($_GET['AddEmployee'])) {
        include 'AddEmployee.php';
    }else if (isset($_GET['DeleteEmployee'])) {
        include 'DeleteEmployee.php';
    }
    ?>

</section>
