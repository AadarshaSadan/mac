<?php

    $con = require_once 'config/database.php';

    $con->query(include 'migrations/create_table_user.php');
    $con->query(include 'migrations/create_table_job_request.php');

    $con->close();
?>