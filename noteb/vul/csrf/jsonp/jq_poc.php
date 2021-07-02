<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSONP劫持测试</title>
    <script src="../../../src/jquery-1.11.0.min.js"></script>    
</head>
<body>
<div id="divCustomers"></div>

<script type="text/javascript">    
    $.getJSON("./jsonp.php?jsoncallback=?", function(getUsers){
          alert(getUsers.name);
          alert(getUsers.pass);
    });
</script>
</body>
</html>