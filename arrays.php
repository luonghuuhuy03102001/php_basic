<?php
    // - dùng để lưu trữ 1 đôi tượng or 1 danh sách các biến (có 2 kiểu là simple or  associative)
    // echo "we talk about arrays";
    // $sum_number = [1,2,3];
    //  + dùng ngoặc vuông 
    // $fruits = ['lemon', 'apple', 'orange'];
    //  + dùng hàm array
    $fruits = array('pineapple', 'melon', 'apple');
    // var_dump($sum_number);
    // print_r($fruits);
    // echo $fruits[2];

    //associative array (là kiểu có key và value )
    // $colors = [
    //     3 => 'red',//key - value
    //     5 => 'green',
    //     7 => 'blue'
    // ];

    // echo $colors[5];

    // + (key là một sâu kí tự)
    // $hex_colors = [
    //     'red' => '#FF0000',
    //     'green' => '#00FF00',
    //     'blue' => '#0000FF',  
    // ];
    // echo $hex_colors['green'];

    // $person = [
    //     'full_name' => 'Lương Hữu Huy', 
    //     'age' => 22,
    //     'email' => 'lhuy4525@gmail.com'
    // ];
    // print_r($person);
    // echo $person['email'];


    //  + array trong array
    $persons = [
        [
            'full_name' => 'Nguyen Duc Hoang',
            'age' => 43,
            'email' => 'sunlight4d@gmail.com' 
        ],
        [
            'full_name' => 'John Dang',
            'age' => 18,
            'email' => 'john@gmail.com' 
        ],
        [
            'full_name' => 'Kelly',
            'age' => 40,
            'email' => 'kelly123@gmail.com' 
        ]
    ];

    // print_r($persons);
    // echo $persons[1]['full_name'];
    var_dump(json_encode($persons));


?>