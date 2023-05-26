<?php
    // - các câu lệnh điều kiện trong php
    // echo "we talk about conditionals"
    //  + câu lệnh if else
    // $age = 22;
    //  if($age >= 18) {
    //     echo "You are greater than or equal to 18 years old";
    // } else {
    //     echo "You are so young";
    // }
    //  + date time thời gian
    // $date_time = date("D M Y");
    // echo $date_time;
    // $hours = date("H");
    // $hours = 18;
    //  echo $hours;
    // if($hours < 12) {
    //     echo "Good morning";
    // } else if($hours >= 12 && $hours <= 17) {
    //     echo "Good afternoon";
    // } else {
    //     echo "Good evening";
    // }

    // - empty ( để kiểm tra xem biến có tồn tại và có giá trị hay không. Nó trả về true nếu biến không tồn tại hoặc có giá trị rỗng (empty string, 0, null, false,...) và trả về false nếu biến có giá trị.)
    $comments = [
        'Good question', 'I like it', 'How are you ?'
    ];
    
    // if(!empty($comments)) { //not = !
    //     echo "There are some comments";
    // } else {
    //     echo 'No comments';
    // }

    // echo !empty($comments) ? "There are comments":
    //                         'No comments';
    
    // $first_comment = !empty($comments) 
    //                 ? $comments[0] :'No comments';

    // $first_comment = $comments[0] ?? 'No comments'; 
    // echo $first_comment;


    // - switch case dùng khi nhận lại một giá trị cụ thể nào đó
    $favorite_color = '';
    switch($favorite_color) {
        case 'red':
            echo 'You choose RED';
            break;
        case 'green':
            echo 'You choose GREEN';
            break;
        case 'blue':
            echo 'You choose BLUE';
            break;
        default: 
            echo 'Not RED, GREEN, BLUE';
    }

?>