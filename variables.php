<?php 
    // - khai báo biến 
     // echo "We talk about variables".'<br>';
    //  + string
     $name = 'huy';
    //  + integer
     $age = 18;
    //  echo $age;
    //  + bool kiểu đúng sai
     $has_mercedes = false;
     //echo $has_mercedes;
    //  + hiện thị thông tin chi tiết của biến
    // var_dump($has_mercedes);
    //  + float
    $product_price = 2.44;
    //  + nối sâu kí tự với biến 
    // echo $name .  " is " . $age . " year old";
    // echo("$name is $age year old");
    // echo("{$name} is {$age} year old");

    // - experssion (biểu thức)
   //echo '1' + '2';
//    $sum = '2' + '3';
   //var_dump($sum);
   //echo 5 * 3;
   //echo 10 / 2;
   //echo 5 / 0;
    // echo 10 % 3;//remains

    // - constants (Hằng số chỉ được gán giá trị 1 lần)
    define('SERVER_NAME', 'localhost');
    define('DATABASE_NAME', 'test_db');
    echo"server: " .SERVER_NAME . ' db: ' . DATABASE_NAME ;

?>