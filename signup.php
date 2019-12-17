<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age=$_POST['phone'];

$con=mysqli_connect("localhost","root","1234","customers");
if(!$con){
   echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
   exit();
}

mysqli_query($con,"INSERT INTO customers(customerId,customerPassword,email,sex,age) VALUES ('$username','$password','$email','$gender','$age')");

mysqli_close($con);

?>
<script>
  alert("회원 가입이 완료되었습니다.");
  location.replace("../main.php");
</script>

// $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
// header('location:'.$HTTP_REFERER);
