<!DOCTYPE html>
<html>
<head>
    <title>PHP Sample Application</title>
</head>
<body>
    <h1>Welcome to my PHP Application</h1>

    <?php
    include 'file1.php'; // Include the first PHP file
    echo "<p>" . getMessageFromFile1() . "</p>";

    include 'file2.php'; // Include the second PHP file
    echo "<p>" . getMessageFromFile2() . "</p>";
    ?>
</body>
</html>
