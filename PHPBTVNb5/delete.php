<?php
$conn = mysqli_connect('localhost', 'root', 'melody'); 
// Kết nối với MySQL Server
if (!$conn)     
die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// Thông báo lỗi nếu kết nối thất bại
if (!mysqli_select_db($conn,'my_personal_contacts'))     
die("Unable to select database: " . mysqli_connect_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại
$id = 4; 
// ID của Venus trong CSQL
$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// Câu lệnh SQL Delete
$result = mysqli_query($conn,$sql_stmt); 
// Thực thi câu lệnh SQL
if (!$result) {
    die("Deleting record failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại 
} else {
    echo "ID number $id has been successfully deleted";
}
mysqli_close($conn); // Đóng kết nối CSDL
?>