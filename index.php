<!DOCTYPE html>
<html>
<head>
    <title>PHP Sample Application</title>
</head>
<body>
    <h1>Welcome to my PHP Application test</h1>

    <?php
    include 'file1.php'; // Include the first PHP file
    echo "<p>" . getMessageFromFile1() . "</p>";
    ?>
</body>
</html>
