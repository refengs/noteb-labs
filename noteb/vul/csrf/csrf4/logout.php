
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
unset($_SESSION["test_username"]);
unset($_SESSION["token"]);
setcookie("token","",time()-3600);
echo '<script type="text/javascript">alert("退出成功");
　　window.location.href="index.php";
　　</script>';

 ?>