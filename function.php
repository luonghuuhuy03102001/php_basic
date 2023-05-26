<?php 
    // - là một khối lệnh có tên hoặc là không tên
    // echo "we talk about function";
    // $y = 22;
    // function sayHello($name) { // tham số đầu vào là arguments
    //     global $y;
    //     echo "y = $y";
    //     $y = 123;
    //      echo "Hello $name";
    // }
    
    // sayHello('huy');


    // function sum($a, $b) { // tham số truyền vào parameter
    //     return $a + $b;
    // }
    // echo sum(1,6);

    // + định nghĩa 1 biến rồi gán vào function 
    // $multiply = function($a, $b) {
    //     return $a * $b;
    // }; 

    // echo $multiply(4, 3);

    //  + arrow function
    // $subtract = fn($a, $b) => $a - $b;
    // echo $subtract(7, 3);

    //  + những hàm có sẳn dùng cho mảng (some built-in function to array)
    $names = ['john', 'anna', 'huy', 'tony'];
    //      + tính tổng số phần tử trong mảng (count())
    // echo "number for items: " . count($names);
    //      + tìm kiếm thông tin trong 1 mảng (kiểm tra xem 1 sâu kí tự có tồn tại trong mảng hay không in_array() trả về bool)
    // var_dump(in_array("huy", $names));
    //      + thêm 1 or nhiều phần tử vào bên trong mảng (array_push() mặc định là thêm vào cuối danh sách)
    // array_push($names, "lisa", 'tome);
    // print_r($names);
    //      + thêm 1 or nhiều phần tử vào bên trong mảng (array_unshift() mặc định là thêm vào đầu danh sách)
    // array_unshift($names, "rose");
    // print_r($names);
    //      + xóa phần tử cuối remove last item (array_pop())
    // array_pop($names);
    // print_r($names);
    //      + xóa phần tử đầu tiên remove first item (array_shift)
    // array_shift($names);
    // print_r($names);
    //      = xóa 1 phần tử bất kì (unset())
    // unset($names[2]);
    // print_r($names);
    //      + tách riêng cấc phần tử trong mảng (array_chunk())
    // $chunke_array = array_chunk($names, 2);
    // print_r($chunke_array);
    //      + gộp 2 mảng vào làm 1 (array_merge)
    // $array_one = [1,2,3];
    // $array_two = [4,5,6];
    // $merged_array = array_merge($array_one, $array_two);
    // print_r($merged_array);
    //      + spread operator . nhân bản array đã cho thành 1 array khác nằm ở vùng nhớ khác nhưng giá trị giống array đã cho
    // $merged_array[0] = 111;
    // $array_three = [...$merged_array];
    // print_r($array_three);
    //      + gộp 2 mảng lại với nhau
    // $array_four = [...$array_one, ...$array_two];
    // print_r($array_four);
    
    //      + combine two array \
    // $a = ['name', 'email', 'age'];
    // $b = ['Hoang', 'sunlight4d@gmail.com', 18];
    // $c = array_combine($a, $b);
    // print_r($c);
    // print_r(array_keys($c));
    // print_r(array_values($c));
    //          đảo vai trò của key and value
    // print_r(array_flip($c));

    //array from a range
    $numbers = range(0, 10);
    print_r($numbers);

    //      + ánh xạ 1 mảng (tạo ra 1 mảng mới có độ rộng bẳng mảng cũ nhưng giá trị lại khác mảng cũ)
    $squared_numbers = array_map(fn($each_number) => 
        $each_number * $each_number
    , $numbers);
    // print_r($squared_numbers);

    //      + lọc giá trị trong 1 mảng
         //filter an array
    $filtered_numbers = array_filter($numbers, 
    fn($each_number) => $each_number % 2 == 0);
    print_r($filtered_numbers);

?>