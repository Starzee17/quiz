<?php
// Test page to verify database connection and functionality
include 'config/config.php';

echo "<h2>Database Connection Test</h2>";
if ($conn) {
    echo "<p style='color: green;'>✓ Database connection successful!</p>";
    
    // Test query
    $sql = "SELECT COUNT(*) as total FROM questions";
    $result = $conn->query($sql);
    
    if ($result) {
        $row = $result->fetch_assoc();
        echo "<p>✓ Found {$row['total']} questions in database</p>";
    } else {
        echo "<p style='color: red;'>✗ Error querying database: " . $conn->error . "</p>";
    }
} else {
    echo "<p style='color: red;'>✗ Database connection failed!</p>";
}

$conn->close();

echo "<h2>File Structure Test</h2>";
$files = [
    'config/config.php',
    'get_questions/get_questions.php', 
    'index/index.php',
    'script/script.js',
    'style/style.css'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        echo "<p style='color: green;'>✓ $file exists</p>";
    } else {
        echo "<p style='color: red;'>✗ $file missing</p>";
    }
}
?>