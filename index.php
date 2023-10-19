<!DOCTYPE html>
<html>
<head>
    <title>PHP Sample Application</title>
</head>
<body>
    <h1>Welcome to my PHP Application</h1>

    <?php
    include 'file1.php', 'file2.php';
    
    echo "<p>" . getMessageFromFile1() . "</p>";
    echo "<p>" . getMessageFromFile2() . "</p>";
    ?>
</body>
</html>
