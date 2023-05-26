<?php
    echo "cookiees in php";
    // - dùng để lưu dữ liệu ở trên trình duyệt và thông tin lưu trữ dữ liệu có thời hạn để quản lý
    // Cookies: - save data in remote browser
    // You can retrieve it when the user visit the site again
    // lưu dữ liệu lên cookies (save data to cookies)
    setcookie('name', 'Huy', time() + 24*3600);
     //after 1 day, cookie will be expired 
    //1 month = 24*3600*30
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }
    //  + xóa cookies
    setcookie('name', '', time() - 24*3600); 
?>