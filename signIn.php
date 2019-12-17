<?php
  session_start();

  $mysqli=mysqli_connect("localhost","root","1234","customers");

  $customerId=$_POST['id'];
  $customerPassword=$_POST['pw'];


  $check =" SELECT *FROM customers WHERE customerId='$customerId'";
  $result = $mysqli->query($check);
?>

<?php
  if(mysqli_num_rows($result)==1) {
    $row=$result->fetch_array(MYSQLI_ASSOC);

    if($row['customerPassword']==$customerPassword){
      $_SESSION['customerId']=$customerId;
      if(isset($_SESSION['customerId'])){ ?>

      <script>
        alert("로그인 되었습니다.");
        location.replace("../main.php");
      </script>
      <?php
      }
      else{
        echo "session fail";
      }
    }
    else {
      ?>
      <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
      </script>
      <?php
      }
    }

    else{
      ?>
      <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
      </script>
      <?php
      }
      ?>
