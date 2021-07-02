<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 
unset($_SESSION["test_username"]);
echo '<script type="text/javascript">alert("退出成功");
　　window.location.href="index.php";
　　</script>';

 ?>