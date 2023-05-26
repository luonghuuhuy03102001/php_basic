<?php
    // echo "Fill handling in php";

    // + đường dẫn chi tiết đến file
    $file_path = './fruits.txt';
    // + file_exists kiểm tra đường dẫn có tồn tại hay không
    if(file_exists($file_path)) {
        // + readFile đọc file và hiện thị ra
        echo readFile($file_path); // + số ở đằng sau là dung lượng của file tình theo byte\
        // + mở file này ra
        $file_handle = fopen($file_path, 'r'); // + với oftion 'r' là mở chỉ để đọc chứ không thay đổi được nội dung hay làm gì khác được
        $file_content = fread($file_handle, filesize($file_path));
        // + đóng file
        fclose($file_handle);
        echo $file_content;
    } else { // trường hợp ngược lại nếu biến $file_path không tồn tại
        $file_handle = fopen($file_path, 'w'); // + với 'w' cũng tạo ra 1 file tại nơi đấy mở file đó nhưng mà dưới oftion để ghi
        //  + thêm dữ liệu cho file
        $file_content = 'apple'.PHP_EOL. 'strawberi'.PHP_EOL . 'orange'; // PHP_EOL là kí tự xuống dòng
        //  + hàm fwrite để ghi file vào nội dung
        fwrite($file_handle, $file_content);
        // + đóng file
        fclose($file_handle);
    }
?>