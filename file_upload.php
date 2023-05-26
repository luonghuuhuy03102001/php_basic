<?php
    // echo "File upload in php";
    // + kiểm tra xem ấn nút submit chưa
    if(isset($_POST['submit'])) {
        //  + mảng để chứa các kiểu file upload, các đuôi cho phép của file
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];  
        // + lấy ra tên của file
        $file_name = $_FILES['upload']['name'];
        if(!empty($file_name)) {
            // print_r($_FILES);
            // + lấy ra dung lượng của file
            $file_size = $_FILES['upload']['size'];
            //  + lấy ra tmp_name của file
            $file_tmp_name = $_FILES['upload']['tmp_name'];  
            //  + $generated_file_name thay dổi tên tránh bị trùng tên file và đảm bảo tên file luôn khác nhau
            $generated_file_name = time().'-'.$file_name;     
            // + nơi, địa chỉ chứa file được upload lên (file sẽ nằm trong thư mục upload)
            $destination_path = "uploads/${generated_file_name}";
            // + lấy ra được đuôi file (hàm explode() để bổ sể các xâu kí tự của biến $file_name, chỗ nào có '.' thì bổ sẻ ra lấy vào trong mảngd)
            $file_extension = explode('.', $file_name);
            // + lấy phần tử cuối trong mảng của biến $file_extension thì ta sẽ lấy được đuôi file và strtolower() để chuyển chữ hoa thành chữ thường
            $file_extension = strtolower(end($file_extension));
            // echo "$file_name, $file_size, $file_extension, $destination_path";  
            // + validate dữ liệu
            if(in_array($file_extension, $permitted_extensions)) { // in_array() kiểm tra xem $file_extension có trong $permitted_extensions không
                if($file_size < 1000000) { // kiểm tra xem $file_size có nhỏ hơn bằng này file hay không
                    // + chuyển file từ thư mục tạm thời sang thư mục upload 
                    move_uploaded_file( $file_tmp_name, $destination_path);
                    $message = '<p style="color:green;">
                        File is uploaded</p>'; 
                } else {
                    $message = '<p style="color: red">File in to big</p>';
                }
            }
        } else {
            $message = '<p style="color: red">No file selected, please try agin</p>';
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
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
    <img src="<?php echo $destination_path ?>" alt="">
</body>

</html>