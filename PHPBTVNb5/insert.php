<?php
$conn = mysqli_connect('localhost', 'root', 'melody'); 
    // Kết nối với MySQL Server
    if (!$conn)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    if (!mysqli_select_db($conn, 'my_personal_contacts'))     
    die("Unable to select database: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    $result = mysqli_query($conn, $sql_stmt); // Thực thi câu lệnh SQL
    if (!$result) {
        die("Adding record failed: " . mysqli_connect_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }
    mysqli_close($conn); // Đóng kết nối CSDL 
    ?>
