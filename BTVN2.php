<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $x="Dangw Cuongw";
    //1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
    echo "Số ký tự là:",strlen("$x"),"<br>";
    //2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
    echo "Số từ trong chuỗi là:",str_word_count("$x"),"<br>";
    //3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
    echo "Đảo ngược chuỗi:", strrev("$x"),"<br>";
    //4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
    echo "Chuỗi Cuongw ở vị trí:",strpos("$x","Cuongw"),"<br>";
    //5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
    echo "Thay thế Dangw thành Ng Dangw:", str_replace("Dangw","Ng Dangw","$x"),"<br>";
    //6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
    //7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    echo strtoupper("i love you"),"<br>";
    //8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
    echo strtolower("I LOVE YOU"),"<br>";
    //9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
    echo ucwords("vì nhiều khi anh không muốn gặp em"),"<br>";
    //10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
    echo trim("   Hello World   "),"<br>";
    //11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    echo ltrim("      Hello World    "),"<br>";
    //12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    echo rtrim("    Hello world      "),"<br>";
    //13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
    $data=explode('n',"$x");
    print_r($data);
    //14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    $data1=['da','ng','w'];
    echo implode($data1) . "<br>";
    //15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
    $data2="dangwcuowng";
    echo str_pad($data2,20,"đz",STR_PAD_RIGHT),"<br>";
    //16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    //17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    //18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    //19.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
    $y = 30.5;
    if (is_int($y)) {
    echo 'Biến là kiểu số nguyên';
    }else{
        echo 'Biến kp số nguyên';
    }
    echo "<br>";
    //20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
    $email="dangcuongk87@gmail.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email là email hợp lệ");
      } else {
        echo("$email là email kh hợp lệ");
      }
    ?> 
</body>
</html>

