<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melody";

//Sử dụng mysqli để thêm dữ liệu vào bảng
$dbh = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error());

$sql_add = "INSERT INTO `users` (`username`,`email`)"; 
$sql_add .= " VALUES ('admin', 'admin@example.com')";

$result1 = mysqli_query($dbh, $sql_add);

if (!$result1) {
    die("Adding record failed: " . mysqli_error()); 
} else {
    echo "Poseidon has been successfully added to your contacts list";
}

mysqli_close($dbh);


// Sử dụng mysqli để cập nhật dữ liệu vào bảng

$dbh = mysqli_connect($servername, $username, $password, $dbname);
$sql_update = "UPDATE `users` SET `username` = 'admin1', `email` = 'admin1@example.com' WHERE `id`=1";

$result2 = mysqli_query($dbh, $sql_update);
if (!$result2) {
    die("Deleting record failed: " . mysqli_error());
} else {
    echo "ID number 1 has been successfully updated";
}

mysqli_close($dbh);


//Sử dụng mysqli để xóa dữ liệu


$dbh = mysqli_connect($servername, $username, $password, $dbname);
$sql_delete = "DELETE FROM `users` WHERE `id`=2";
$result3 = mysqli_query($dbh, $sql_delete);

if (!$result3) {
    die("Deleting record failed: " . mysqli_error());
} else {
    echo "ID number $id has been successfully deleted";
}
mysqli_close($dbh);


//Sử dụng mysqli để hiển thị dữ liệu
$dbh = mysqli_connect($servername, $username, $password, $dbname);
$sql_select = "SELECT * FROM `users`";

$result4 = mysqli_query($dbh, $sql_select);
if (!$result4) {
    die("Database access failed: " . mysqli_error()); 
}else{
    $row = mysqli_num_rows($result4);
    if ($row > 0) {
        // Duyệt qua các hàng dữ liệu
        while ($row = mysqli_fetch_assoc($result4)) {
            echo 'ID: ' . $row['id'] . "<br>";
            echo 'Username: ' . $row['username'] . "<br>";
            echo 'Email: ' . $row['email'] . "<br>";
            echo 'Time_createAt: ' . $row['reg_date'] . "<br>"; // Sửa tên cột nếu cần
            echo "<hr>";
        }
    } else {
        echo "No records found.";
    }
}
mysqli_close($dbh);

?>