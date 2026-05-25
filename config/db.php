<?php
// ============================================================
//  config/db.php  —  Database connection (MySQLi)
//  Place this file outside your public web root if possible.
// ============================================================

define('DB_HOST', 'localhost');
define('DB_USER', 'root');          // change to your MySQL user
define('DB_PASS', '');              // change to your MySQL password
define('DB_NAME', 'ugat_db');
define('DB_PORT', 3306);

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Check connection
if ($conn->connect_error) {
    // In production, log this and show a generic error page
    error_log('DB connection failed: ' . $conn->connect_error);
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Database connection error.']));
}

// Force UTF-8
$conn->set_charset('utf8mb4');