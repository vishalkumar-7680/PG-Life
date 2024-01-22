<?php
$conn = mysqli_connect("localhost:3307", "root", "", "pg_life");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
