<?php
    // echo "string function on php";
    $fullName = "Luong Huu Huy";
    //  + độ dài của string
    // echo "length ". strlen($fullName);
    //  + đảo ngượi string
    // echo strrev($fullName);
    //  + chuyển thành kí tự thường
    // echo strtolower($fullName);
    //  + đổi về kí tự viêt hoa
    // echo strtoupper($fullName);
    //  + tìm kiếm và thay thế
    // echo str_replace(' ', '-', $fullName);
    //  + tìm kiếm kiểm tra kí tự
    if(str_starts_with(strtolower($fullName), 'luong')) {
        echo "His name starts with Luong<br>";
    }
    if(str_ends_with(strtolower($fullName), 'huy')) {
        echo "His name ends with huy <br>";
    }
    echo "<h1>html string</h1>";    
    //  + hiện ra cả các thẻ html
    echo htmlspecialchars("<h1>html string</h1>");

    echo htmlspecialchars("<script>alert('This is javascript code')</script>");

    //htmlspecialchars used to get data in form
    printf('<br>%s likes %s', 'Hoang', 'Mercedes G63');
    printf('pi = %f', 3.14);
?>