<?php
    require './components/hearder.php';
    echo "<h1>list of feedback here </h1>";
    $sql = "SELECT name, email, body from feedback";
    if($connection != null) {
        try {
            // + Phương thức prepare trong PHP là một phương thức được sử dụng để chuẩn bị một câu lệnh SQL trước khi thực thi. Phương thức này giúp tránh được các lỗ hổng bảo mật như SQL injection bằng cách sử dụng các tham số thay thế cho các giá trị trong câu lệnh SQL. Nó cũng giúp tăng hiệu suất của ứng dụng bằng cách tối ưu hoá câu lệnh SQL. Sau khi chuẩn bị câu lệnh SQL, bạn có thể thực thi nó bằng cách gọi phương thức execute().
            $statement = $connection->prepare($sql);
            $statement->execute();
            // + setFetchMode đọc dữ liệu ra 
            // + Phương thức setFetchMode trong PHP được sử dụng để thiết lập chế độ trả về kết quả của một truy vấn dữ liệu. Nó cho phép bạn thiết lập cách mà các d dữ liệu được trả về từ cơ sở dữ liệu. Các chế độ trả về kết quả bao gồm:
            // + PDO::FETCH_ASSOC: Trả về một mảng kết hợp với tên cột là các khóa và giá trị của cột tương ứng là các giá trị trong mảng.
            // + PDO::FETCH_NUM: Trả về một mảng số thứ tự với các giá trị tương ứng với các cột trong truy vấn.
            // + PDO::FETCH_BOTH: Trả về một mảng kết hợp và một mảng số thứ tự, với cả hai mảng có các giá trị tương ứng với các cột trong truy vấn.
            // + PDO::FETCH_OBJ: Trả về một đối tượng với thuộc tính tương ứng với các cột trong truy vấn.
            // + Bạn có thể sử dụng phương thức setFetchMode để thiết lập chế độ trả về kết quả trước khi thực hiện truy vấn bằng PDO.
            $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
            // + trả ra danh sachs bản ghi fetchAll là phương thức trong PHP được sử dụng để lấy tất cả các dòng dữ liệu kết quả trả về từ một truy vấn SQL bằng đối tượng PDOStatement. Phương thức này trả về một mảng chứa tất cả các dòng dữ liệu,
            $feedbacks = $statement->fetchAll();
            echo '<ul class="list-group">';
            foreach($feedbacks as $feedback) {
                $name = $feedback['name'] ?? '';
                $email = $feedback['email'] ?? '';
                $body = $feedback['body'] ?? '';
                echo "<li class='list-group-item'>";
                echo "<p>$name</p>";
                echo "<p>$email</p>";
                echo "<p>$body</p>";
                echo "</li>";
                //echo "<h3>$name, $email, $body</h3>";
            }
            echo '</ul>';
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    
   
    include './components/footer.php';

?>