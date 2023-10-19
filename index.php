<!DOCTYPE html>
<html>
<head>
    <title>PHP Sample Application</title>
</head>
<body>
    <h1>Welcome to my PHP Application</h1>

    <?php

    echo "<p>" . "testing" "</p>"; 
    include 'file1.php';
    
    echo "<p>" . getMessageFromFile1() . "</p>";
    ?>
</body>
</html>
