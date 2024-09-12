<?php
/*Sử dụng PDO thêm dữ liệu vào bảng 
Sử dụng PDO cập nhật dữ liệu vào bảng
Xoá dữ liệu ở bảng sử dụng PDO
Hiển thị dữ liệu sử dụng PDO  
*/
const  DB_TYPE = 'mysql';
const DB_HOST = 'localhost';
const DB_NAME = 'melody';
const USER_NAME = 'root';
const USER_PASSWORD = '';

$conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, USER_NAME, USER_PASSWORD);
/*$sql_add = $conn -> prepare ('INSERT INTO users (username, email) values (:username, :email)');
$sql_add->bindParam(':username', $username);
$sql_add->bindParam(':email', $email);

$username = 'lantam';
$email = 'lantam@gmail.com';
$sql_add->execute();

echo "Records have been successfully added.<br>";*/

// Cập nhập dữu liệu trong bảng 
$sql_update= $conn -> prepare ('UPDATE users SET username= :username, email= :email WHERE id= :id');
$sql_update->bindParam(':username', $username);
$sql_update->bindParam(':email', $email);
$sql_update->bindParam(':id', $id);

$username = 'admin1';
$email = 'admin1@example.com';
$id = 1;
$sql_update->execute();

echo "Record has been successfully updated.<br>";

// Xoá dữ liệu trong bảng
$sql_delete = $conn -> prepare ('DELETE FROM users WHERE id = :id');
$sql_delete -> bindParam(':id', $id);

$id = 4;
$sql_delete->execute();
echo "Record has been successfully deleted.<br>";

//Hiển thị dữ liệu

$sql_select = 'SELECT * FROM users';
    $stmt = $conn->prepare($sql_select);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
        echo 'ID: ' . $row['id'] . "<br>";
        echo 'Username: ' . $row['username'] . "<br>";
        echo 'Email: ' . $row['email'] . "<br>";
        echo 'Time_createAt: ' . $row['reg_date'] . "<br>";
        echo "<hr>";
    }

    $conn = null;
?>