<?php
    // echo "superglobals in php";
    // print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);

    //We will send data through url or form using $_GET / $_POST
    //  + gửi dữ liệu từ url lên trên server bằng biến toàn cầu $GET $POST
    //  + isset hàm dùng để kiểm tra xem một biến đã được khởi tạo hay chưa. Hàm này trả về true nếu biến đã được khởi tạo và false nếu không.
    // if(isset($_GET['name'])) {
    //     echo $_GET['name'];
    // }
    // if(isset($_GET['age'])) {
    //     echo $_GET['age'];
    // } 
    // $name = $_GET['name'] ?? '';
    // $age = $_GET['age'] ?? '';
    // echo $name;
    // echo $age;
    //  + biến code html and javascript thành string để bảo mật 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);  // dùng để thay thế htmlspecialchars
    $password = htmlspecialchars($_POST['password']) ?? '';
    $email = htmlspecialchars($_POST['email']) ?? '';
    echo $email;
    echo $password;
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
    <form action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>