<?php
    //  - session được lưu bên trên server 
    //      + lưu trữ thông tin trên máy chủ web, cho phép lưu trữ thông tin về người dùng và giữ người dùng đăng nhập trên trang web. Session được tạo ra khi người dùng truy cập vào trang web và được lưu trữ trên máy chủ. Khi người dùng truy cập lại trang web, thông tin được lấy ra từ session để đảm bảo rằng người dùng vẫn đăng nhập và các thông tin của họ vẫn được lưu trữ
    //      +  session are stored in the server
    //      + so it can be used across multiple pages  
    // echo "Session in php";
    //  + khởi tạo session
    session_start();
    // + kiểm tra xem đã ấn nút submit chưa
    if (isset($_POST['submit'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($email == "admin@gmail.com" && $password == '123456') {
            // + lưu biến $email vào session
            $_SESSION['email'] = $email;
            // + chuyển sang trang dashboard
            header('location: ./dashboard.php');
        } else {
            echo "incorrect email/passwrod";
        }
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
    <h1>Login to your account</h1>
<form 
        action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
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