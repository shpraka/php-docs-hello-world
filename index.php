<!DOCTYPE html>
<html>
<head>
    <title>Sample PHP Web Page</title>
</head>
<body>
    <h1>Welcome to My PHP Web Page</h1>
    <p>Today's date is: <?php echo date('Y-m-d H:i:s'); ?></p>
    
    <?php
    $name = "John Doe";
    echo "<p>Hello, $name! This is a PHP-generated message.</p>";
    ?>

    <p>Here's a list of items:</p>
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>
</body>
</html>
