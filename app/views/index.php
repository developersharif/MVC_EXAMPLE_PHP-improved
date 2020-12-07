<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo siteName; ?></title>
</head>

<body>

    <?php
    echo "<b>Products Name:</b></br>";
    while ($row = $cat->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
    ?>
</body>

</html>