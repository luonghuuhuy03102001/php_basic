<?php
    // echo "OOP - Object Orineted Programming";

    class User {
        public $name;
        public $age;
        public $email;
        public $password;
        // + nếu để là private thì không thể truy cập đucợ
        // private $names;
        // + protected chỉ thay đổi được ở lớp con mang tính kế thừa
        // protected $names;

        // + constructer là 1 hàm khởi tạo là hàm được gọi gay khi đối tượng được tạo ra
       public function __construct($name, 
                                    $email, 
                                    $age, 
                                    $password) {
            //echo "constructor run<br>";
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;            
        }

        // + method là 1 function chỉ phục vụ cho class đó mà thôi
        function set_name($name) { // hàm set_name để thay đổi thuộc tính name, $name ở dòng 15 là tham số truyền vào và set tham số truyền vào cho hàm this.name
            $this->name = $name; //$this là tham chiếu đến đối tượng user
        }

        // + lấy ra thuộc tính này dùng hàm gettter
        function get_name() {
            return $this->name;
        }
    }

    // + tạo ra 1 đối tượng cấp phát vùng nhớ chứa đối tượng đó
    $user1 = new User('john', 'john@gmail.com', 23, '11223');
    $user2 = new User('tony', 'tony@gmail.com', 19, 'abc12');    
    // + gán value cho class
    // $user1->name = 'luong huu huy';
    // $user1->age = 22;
    // $user1->email = 'lhuy4525@gmail.com';
    // $user1->password = '12345';
    // $user1->set_name('huy');
    // $user2->set_name('luong');
    // print_r($user1);
    // print_r($user2);
    // echo $user1->get_name();
    // echo $user2->get_name();
    
    // echo $user2->email;    
    // echo $user2->name;


    // + tính kế thừa trong hướng đối tượng (có đối tượng khác và có vài thuộc tính giống đối tượng cũ nhưng thêm vài cái nữa vào)
    class Employee extends User {
        public function __construct($name, 
                                    $email, 
                                    $age, 
                                    $password,
                                    $title)
                                    {
                                        parent::__construct($name, $email, $age, $password);    // + parent là tương ứng với lớp cha là User ,  parent::__construct() tương đương với hàm __constructer cảu User                                 
                                        $this->title = $title;
                                    }
                                    public function get_title() {
                                        return $this->title;
                                    }

                                    function set_name($name) {
                                        $this->name = $name; 
                                    }
                                    
    }
    $employee1 = new Employee('huy', 'huy@gmail.com', 
                        30,'123456','nhân vien');
    echo $employee1->get_title();    
    echo $employee1->get_name();    
?>