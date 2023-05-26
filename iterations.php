<?php
    // echo "we talk about iteration";
    //  + vòng lặp for
    // for($i = 0; $i < 10; $i++) {
    //      echo $i <= 5 ? "$i" : "";
    //     // echo $i;
    // }

    //  + vòng lạp while (kiểm trả rồi mới làm)
    // $i = 0;
    // while($i < 20) {
    //     echo "i = $i<br>";
    //     //never ending
    //     $i = $i + 1;
    // }

    //  + vòng lặp do while (thực hiện trước rồi mới kiểm tra)\
    // $i = 50;
    //  do {
    //     echo "i = $i<br>";
    //     $i = $i + 1;
    // }while($i < 30);

    // + foreach dùng để lặp qua các mảng
    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
    
    // for($i = 0; $i < count($fruits); $i++) {
    //     echo "$fruits[$i] <br>";
    // }
    
    foreach ($fruits as $index => $fruit) {
        echo "$index - $fruit <br>";
    }

    $person = [
        'full_name' => 'Lương Hữu Huy',
        'email' => 'lhuy4525@gmail.com',
        'age' => 22
    ];
    foreach($person as $key => $value) {
        echo "$key : $value <br>";
    }

?>