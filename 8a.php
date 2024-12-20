<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor Counter</title>
<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
}
.container {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
h1 {
    color: #333;
    text-align: center;
}
.counter {
    font-size: 24px;
    text-align: center;
    margin-top: 20px;
}
</style>
</head>
<body>
<div class="container">
    <h1>Welcome to Our Website</h1>
    <div class="counter">
        <?php
        // Error reporting for debugging
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Define the file to store the count
        $counterFile = 'visitor_count.txt';

        // Initialize count to zero if file doesn't exist
        if (!file_exists($counterFile)) {
            file_put_contents($counterFile, '0');
        }

        // Read the current count
        $count = (int)file_get_contents($counterFile);

        // Increment the count
        $count++;

        // Write the new count to the file
        file_put_contents($counterFile, (string)$count); 
        //file doesent exists create file and initialize to zero and initialize to zero

        // Display the visitor count
        echo "<h2>Visitor Count</h2>";
        echo "<p>You are visitor number: $count</p>";
        ?>
    </div>
</div>
</body>
</html>
