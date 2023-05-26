
<?php
    session_start();
    // + kiểm tra xem emil có trong session hay không
    if(isset($_SESSION['email'])) {
        echo "wellcome to dashboard page";
        echo "email: ". $_SESSION['email']; // gọi lấy biến session ra
        echo "<a href='/logout.php'>Logout</a>";
    } else {
        echo "wellcome guest to dashboard page";
        echo "<a href='/session.php'>back to login</a>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is dashboard</h1>
</body>
</html>