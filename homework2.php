<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string = "Hello Nguyen Duc Lan Tam @#! SHS";
# 1. Viết Chương trình PHP đếm số thứ tự trong một chuỗi sử dụng hàm strlen() 
    echo "1. Số lượng ký tự: ".strlen($string)."<br> <br>"; 

# 2. Viết phương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()
    echo "2. Số từ trong một chuỗi: ".str_word_count($string)."<br> <br>";

# 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
    echo "3. Đảo ngược chuỗi: ".strrev($string)."<br> <br>";

# 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
    echo "4. Chuỗi 'Tam' ở vị trí: ".strpos($string, "Tam")."<br> <br>";

# 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
    echo "5. Thay thế 'Hello' bằng  'Hi': ".str_replace("Hello", "Hi", $string)."<br> <br>";

# 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
    $string2 = "Hello";
    function startByStr($str, $str2){
        $result = strncmp($str, $str2, strlen($str2));
        if ($result === 0){
            echo "6. Chuỗi ".$str." bắt đầu bằng chuỗi ".$str2."<br> <br>";
        } else{
            echo "6. Chuỗi ".$str." bắt đầu bằng chuỗi ".$str2."<br> <br>";
        };
    }
    startByStr($string, $string2);
# 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    echo "7. Chuyển đổi thành chữ hoa: ".strtoupper($string)."<br> <br>";

# 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
    echo "8. Chuyển đổi thành chữ thường: ".strtolower($string)."<br> <br>";

# 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
    echo "9. Chuyển đổi thành in hoa chữ cái đầu tiên của mỗi từ: ".ucwords($string)."<br> <br>";

# 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
    echo "10. loại bỏ khoảng trắng ở đầu và cuối: ".trim($string)."<br> <br>";

# 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    echo "11. loại bỏ ký tự đầu tiên của một chuỗi: ".ltrim($string, 'H')."<br> <br>";

# 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    echo "12. loại bỏ ký tự cuối cùng của một chuỗi: ".rtrim($string, 'm')."<br> <br>";


# 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    $strToArr = explode(' ', $string);
    echo "13. Tách chuỗi thành mảng: ";
    print_r($strToArr);
    echo "<br> <br>";

# 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    $arrToStr = implode(" ",  $strToArr );
    echo "14. Gộp mảng thành chuỗi: ";
    print_r ($arrToStr);
    echo "<br> <br>";

# 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
    echo "15. Thêm chuỗi ' 2004' vào cuối chuỗi: ".str_pad($string, strlen($string) + 5, " 2004")."<br> <br>";
    echo "15. Thêm chuỗi '2004 ' vào đầu chuỗi: ".str_pad($string, strlen($string) + 5, "2004 ", STR_PAD_LEFT)."<br> <br>";
# 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    function endByStr($oriStr, $str){
        $result = substr($oriStr, -strlen($str));
        if ($result === $str){
            return "16. Chuỗi ".$oriStr." kết thúc bằng chuỗi ".$str;
        }
        else{
            return "16. Không tìm thấy chuỗi con";
        }
    };
    echo endByStr("ABC ABA", "ABA")."<br><br>";
# 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    $string3 = "Nguyen";
    function containStr ($str, $str3){
        $result2 = strstr($str, $str3);
        if (strncmp($result2, $str3, strlen($str3)) === 0 ){
            echo "17. Chuỗi ".$str." chứa chuỗi ".$str3."<br> <br>";
        } else {
            echo "17. Chuỗi ".$str." không chứa chuỗi ".$str3."<br> <br>";
        };
    }
    containStr($string, $string3);
# 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    echo "18. ".preg_replace('/[^a-zA-Z0-9]/', "T", $string)."<br><br>";

# 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
    function isInt ( $string ) {
        if(is_int($string)){
            echo "19. Chuỗi ".$string." là số nguyên."."<br><br>";
        } else {
            echo "19. Chuỗi ".$string." không phải là số nguyên."."<br><br>";
        }
    }
    isInt("123");
    isInt(123);

# 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
    function verEmail($str){
        $result = filter_var($str, FILTER_VALIDATE_EMAIL);
        if($result){
            echo "20. Chuỗi ".$str." là email hợp lệ."."<br><br>";
        }else{
            echo "20. Chuỗi ".$str." không phải là email hợp lệ."."<br><br>";
        }
    }
    verEmail("test@example.com");
    verEmail("testexample.com");

?>
</body>
</html>